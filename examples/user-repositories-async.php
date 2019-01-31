<?php declare(strict_types=1);
use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\User;
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();

$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->user($argv[1] ?? 'WyriHaximus')->then(function (User $user) {
    resource_pretty_print($user);
    $user->repositories()->subscribe(function ($repository) {
        resource_pretty_print($repository, 1, true);
    }, function ($error) {
        echo (string)$error;
    });
})->done(null, 'display_throwable');

$loop->run();

displayState($client->getRateLimitState());
