<?php

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\LicenseInterface;
use ApiClients\Client\Github\Resource\OrganizationInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->licenses()->subscribeCallback(function (LicenseInterface $license) {
    resource_pretty_print($license);
}, 'display_throwable');

$loop->run();
