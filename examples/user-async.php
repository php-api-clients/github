<?php

use React\EventLoop\Factory;
use WyriHaximus\Github\AsyncClient;
use WyriHaximus\Github\Resource\UserInterface;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = new AsyncClient($loop);

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
        var_export($user);
    });
}

$loop->run();
