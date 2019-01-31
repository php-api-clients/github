<?php declare(strict_types=1);
use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Event;
use ApiClients\Client\Github\Resource\Async\User;
use function ApiClients\Foundation\resource_pretty_print;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use React\EventLoop\Factory;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();

$client = AsyncClient::create($loop, require 'resolve_token.php');

unwrapObservableFromPromise($client->user($argv[1] ?? 'php-api-clients')->then(function (User $user) use ($argv) {
    resource_pretty_print($user);

    return $user->events();
}))->subscribe(function (Event $event) {
    resource_pretty_print($event);
}, 'display_throwable');

$loop->run();

displayState($client->getRateLimitState());
