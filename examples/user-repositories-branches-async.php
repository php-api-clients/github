<?php declare(strict_types=1);
use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\Async\User;
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;
use function React\Promise\all;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();

$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->user($argv[1] ?? 'php-api-clients')->then(function (User $user) use ($argv) {
    resource_pretty_print($user);

    return $user->repository($argv[2] ?? 'github');
})->then(function (Repository $repository) {
    resource_pretty_print($repository, 1, true);
    $repository->branches()->subscribe(function (Repository\Branch $branch) {
        resource_pretty_print($branch, 2, true);
        $branch->detailedCommit()->then(function (Repository\Commit $commit) {
            resource_pretty_print($commit);

            $promises = [];
            foreach ($commit->parents() as $parent) {
                $promises[] = $parent->detailedCommit();
            }

            return all($promises);
        })->then(function ($commits) {
            /** @var Repository\Commit $commit */
            foreach ($commits as $commit) {
                resource_pretty_print($commit);
            }
        })->done(null, 'display_throwable');
    }, function ($error) {
        echo (string)$error;
    });
})->done(null, 'display_throwable');

$loop->run();

displayState($client->getRateLimitState());
