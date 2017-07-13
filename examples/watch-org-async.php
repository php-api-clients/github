<?php declare(strict_types=1);
use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\Async\User;
use React\EventLoop\Factory;
use Rx\React\Promise;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

if (!isset($argv[1])) {
    die('Supply org name' . PHP_EOL);
}

Promise::toObservable($client->user($argv[1]))->flatMap(function (User $user) {
    return $user->repositories();
})->subscribe(function (Repository $repository) {
    $repository->subscribe()->done(function () use ($repository) {
        resource_pretty_print($repository);
    }, 'display_throwable');
}, 'display_throwable');

$loop->run();
