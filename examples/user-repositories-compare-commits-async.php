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
    $repository->compareCommits($argv[3] ?? '1434d8af925bc7f487005595a791d2554102862e', $argv[4] ?? 'HEAD')->then(function (Repository\Compare $compare) {
        resource_pretty_print($compare, 2, true);
        $compare->refresh()->then(function (Repository\Compare $compare) {
            resource_pretty_print($compare, 2, true);
        })->done(null, 'display_throwable');
    }, function ($error) {
        echo (string)$error;
    });
})->done(null, 'display_throwable');

$loop->run();

displayState($client->getRateLimitState());
