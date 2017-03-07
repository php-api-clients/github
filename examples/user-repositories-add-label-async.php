<?php

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Label;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\UserInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->user($argv[1] ?? 'WyriHaximus')->then(function (UserInterface $user) use ($argv) {
    resource_pretty_print($user);
    return $user->repository($argv[2] ?? 'awesome-volkswagen');
})->then(function (Repository $repository) use ($argv) {
    resource_pretty_print($repository);
    return $repository->addLabel((string)($argv[3] ?? 'test-' . time()), (string)($argv[4] ?? random_int(100000, 9999999)));
})->then(function (Label $label) use ($argv) {
    resource_pretty_print($label);
    return $label->withColor((string)($argv[5] ?? random_int(100000, 9999999)))->save();
})->done(function (Label $label) {
    resource_pretty_print($label);
    echo 'Done!', PHP_EOL;
}, 'display_throwable');

$loop->run();
