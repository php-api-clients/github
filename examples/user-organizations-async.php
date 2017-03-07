<?php

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\Async\User;
use ApiClients\Client\Github\Resource\OrganizationInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();

$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->user($argv[1] ?? 'WyriHaximus')->then(function (User $user) use ($argv) {
    resource_pretty_print($user);
    $user->organizations()->subscribeCallback(function (OrganizationInterface $organization) {
        resource_pretty_print($organization);
    });
})->done(null, 'display_throwable');

$loop->run();
