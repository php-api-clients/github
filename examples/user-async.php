<?php

use React\EventLoop\Factory;
use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\UserInterface;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

$users = [
    'WyriHaximus',
];

if (count($argv) > 1) {
    unset($argv[0]);
    foreach ($argv as $user) {
        $users[] = $user;
    }
}

foreach ($users as $user) {
    $client->user($user)->then(function (UserInterface $user) {
        resource_pretty_print($user);
    });
}

$loop->run();
