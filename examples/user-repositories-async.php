<?php

use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Client\Github\Resource\LabelInterface;
use React\EventLoop\Factory;
use Rx\Observer\CallbackObserver;
use ApiClients\Client\Github\Resource\RepositoryInterface;
use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\UserInterface;
use function ApiClients\Foundation\resource_pretty_print;
use React\Filesystem\Filesystem as ReactFilesystem;
use WyriHaximus\React\Cache\Filesystem;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();

$filesystem = ReactFilesystem::create($loop);
$client = new AsyncClient($loop);

$client->user($argv[1] ?? 'WyriHaximus')->then(function (UserInterface $user) {
    resource_pretty_print($user);
    $user->repositories()->subscribeCallback(function ($repository) {
        resource_pretty_print($repository, 1, true);
    });
});

$loop->run();
