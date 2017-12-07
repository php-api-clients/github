<?php declare(strict_types=1);

/**
 * This example enables travis for all repositories
 * with a .travis.yml that aren't forks and aren't enabled yet.
 */

use ApiClients\Client\AppVeyor\AsyncClient as AsyncAppVeyorClient;
use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Contents\File;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\Contents\FileInterface;
use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Client\Travis\AsyncClient as AsyncTravisClient;
use ApiClients\Client\Travis\AsyncClientInterface as AsyncTravisClientInterface;
use ApiClients\Client\Travis\Resource\Async\Repository as TravisRepository;
use ApiClients\Foundation\Options;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Middleware\Debug\DebugMiddleware;
use ApiClients\Middleware\Delay\DelayMiddleware;
use ApiClients\Middleware\Pool\PoolMiddleware;
use React\EventLoop\Factory;
use ResourcePool\Pool;
use Rx\Observable;
use function ApiClients\Foundation\resource_pretty_print;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use function React\Promise\reject;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

/**
 * This example has the potential for a lot of calls, so throttling a bit.
 */
$transportOptions = [
    TransportOptions::DEFAULT_REQUEST_OPTIONS => [
        PoolMiddleware::class => [
            \ApiClients\Middleware\Pool\Options::POOL => new Pool(3),
        ],
        DelayMiddleware::class => [
            \ApiClients\Middleware\Delay\Options::DELAY => 1,
        ],
    ],
    TransportOptions::MIDDLEWARE => [
        PoolMiddleware::class,
        DelayMiddleware::class,
        DebugMiddleware::class,
    ],
];

$loop = Factory::create();
$appVeyorClient = AsyncAppVeyorClient::create($loop, require 'resolve_appveyor-key.php', [
    Options::TRANSPORT_OPTIONS => $transportOptions,
]);
$travisClient = AsyncTravisClient::create($loop, require 'resolve_travis-key.php', [
    Options::TRANSPORT_OPTIONS => $transportOptions,
]);
$githubClient = AsyncClient::create($loop, require 'resolve_token.php', [
    Options::TRANSPORT_OPTIONS => $transportOptions,
    // Pass the AppVeyor and Travis client into the Github client internal container
    Options::CONTAINER_DEFINITIONS => [
        AsyncAppVeyorClient::class => $appVeyorClient,
        AsyncTravisClientInterface::class => $travisClient,
    ],
]);

// Fetch the user/org given as first argument to this script
$baseStream = unwrapObservableFromPromise($githubClient->user($argv[1])->then(function (UserInterface $user) use ($argv) {
    resource_pretty_print($user);

    // Get all repositories for the given user
    return $user->repositories();
}))->filter(function (Repository $repository) {
    // Filter out forks
    return !$repository->fork();
})->filter(function (Repository $repository) {
    // Filter out repositories with nothing in them
    return $repository->size() > 0;
})->filter(function (Repository $repository) {
    // Only check repositories that start with reactphp-http
    // This is optional and you can remove this to check all repositories
    // BUT that takes a lot of calls to check and time due to throttling
    return strpos($repository->name(), 'php-super') === 0;
})->flatMap(function (Repository $repository) {
    // Check if the repository contains a .travis.yml
    return Observable::fromPromise(new React\Promise\Promise(function ($resolve, $reject) use ($repository) {
        $hasCi = [
            'repo' => $repository,
            'travis' => false,
            'appveyor' => false,
        ];
        $repository->contents()->filter(function ($node) {
            // Only let through files
            return $node instanceof FileInterface;
        })->subscribe(function (File $file) use (&$hasCi) {
            if ($file->name() === '.travis.yml') {
                $hasCi['travis'] = true;
                return;
            }
            if ($file->name() === 'appveyor.yml') {
                $hasCi['appveyor'] = true;
                return;
            }
        }, function ($error) use ($reject) {
            $reject($error);
        }, function () use (&$hasCi, $resolve) {
            $resolve($hasCi);
        });
    }));
});

/**
 * Stream handling the Travis side of things
 */
$baseStream->filter(function (array $d) {
    return $d['travis'];
})->map(function (array $d) {
    return $d['repo'];
})->flatMap(function (Repository $repository) {
    // Get Travis repository for the Github repository
    return Observable::fromPromise($repository->travisRepository());
})->flatMap(function (TravisRepository $repository) {
    // Check if the repository on Travis is active
    // We're only interested in inactive repositories
    return Observable::fromPromise($repository->isActive())
        ->filter(function ($isActive) {
            return !$isActive;
        })
        ->mapTo($repository);
})->subscribe(function (TravisRepository $repository) {
    // Activate repository on Travis
    $repository->enable()->done(function (TravisRepository $repository) {
        resource_pretty_print($repository);
    }, 'display_throwable');
}, 'display_throwable');

/**
 * Stream handling the AppVeyor side of things
 */
$baseStream->filter(function (array $d) {
    return $d['appveyor'];
})->map(function (array $d) {
    return $d['repo'];
})->subscribe(function (Repository $repository) use ($appVeyorClient) {
    $repository->appVeyorRepository()->then(function ($appVeyorRepository) use ($appVeyorClient, $repository) {
        if ($appVeyorRepository !== false) {
            return reject();
        }

        return $appVeyorClient->addProject('gitHub', $repository->fullName());
    })->done(function ($repository) {
        resource_pretty_print($repository);
    }, 'display_throwable');
}, 'display_throwable');

$loop->run();

// Display Github API token status
displayState($githubClient->getRateLimitState());
