<?php declare(strict_types=1);
use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\User;
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

$users = [
    'WyriHaximus',
];

if (\count($argv) > 1) {
    unset($argv[0]);
    foreach ($argv as $user) {
        $users[] = $user;
    }
}

foreach ($users as $user) {
    $client->user($user)->then(function (User $user) {
        resource_pretty_print($user);

        return $user->refresh();
    })->done(function (User $user) {
        resource_pretty_print($user);
    }, 'display_throwable');
}

$loop->run();

displayState($client->getRateLimitState());
