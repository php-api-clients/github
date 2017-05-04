<?php

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\RateLimit;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->rateLimit()->done(function (RateLimit $rateLimit) {
    resource_pretty_print($rateLimit);
}, 'display_throwable');

$loop->run();

displayState($client->getRateLimitState());
