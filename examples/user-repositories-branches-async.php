<?php

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\Async\User;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();

$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->user($argv[1] ?? 'php-api-clients')->then(function (User $user) use ($argv) {
    resource_pretty_print($user);
    return $user->repository($argv[2] ?? 'github');
})->done(function (Repository $repository) {
    resource_pretty_print($repository, 1, true);
    $repository->branches()->subscribeCallback(function ($labels) {
        resource_pretty_print($labels, 2, true);
    }, function ($error) {
        echo (string)$error;
    });
});

$loop->run();
