<?php declare(strict_types=1);
use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Organization;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();

$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->organization($argv[1] ?? 'php-api-clients')->then(function (Organization $organization) {
    resource_pretty_print($organization);
    $organization->webHooks()->subscribe(function ($webHook) {
        resource_pretty_print($webHook, 2, true);
    }, function ($error) {
        echo (string)$error;
    });
})->done(null, 'display_throwable');

$loop->run();

displayState($client->getRateLimitState());
