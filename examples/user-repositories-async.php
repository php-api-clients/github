<?php

use React\EventLoop\Factory;
use Rx\Observer\CallbackObserver;
use WyriHaximus\Github\Resource\RepositoryInterface;
use WyriHaximus\Github\AsyncClient;
use WyriHaximus\Github\Resource\UserInterface;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = new AsyncClient($loop);

$client->user($argv[1] ?? 'WyriHaximus')->then(function (UserInterface $user) {
    $user->repositories()->subscribe(new CallbackObserver(function (RepositoryInterface $repository) {
        echo "\t", 'Repository', PHP_EOL;
        echo "\t\t" . 'id: ' . $repository->id(), PHP_EOL;
        echo "\t\t" . 'name: ' . $repository->name(), PHP_EOL;
        echo "\t\t" . 'fork: ' . (int)$repository->fork(), PHP_EOL;
    }));
});

$loop->run();
