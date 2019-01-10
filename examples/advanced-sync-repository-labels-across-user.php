<?php declare(strict_types=1);

/**
 * This example enables travis for all repositories
 * with a .travis.yml that aren't forks and aren't enabled yet.
 */

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Label;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\UserInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$githubClient = AsyncClient::create($loop, require 'resolve_token.php');

//$labels = [];
// Fetch the user/org given as first argument to this script
unwrapObservableFromPromise($githubClient->user($argv[1])->then(function (UserInterface $user) use ($argv) {
    resource_pretty_print($user);

    // Get all repositories for the given user
    return $user->repositories();
}))->filter(function (Repository $repository) {
    // Filter out forks
    return !$repository->fork();
})->filter(function (Repository $repository) {
    // Filter out repositories with nothing in them
    return $repository->size() > 0;
})->flatMap(function (Repository $repository) {
    return $repository->labels();
})->subscribe(function (Label $label) use (&$labels) {
    if (!isset($labels[\strtolower($label->name())])) {
        $labels[\strtolower($label->name())] = [
            'name' => $label->name(),
            'color' => $label->color(),
        ];
    }
}, 'display_throwable', function () use (&$labels) {
    \var_export($labels);
});

$loop->run();

// Display Github API token status
displayState($githubClient->getRateLimitState());
