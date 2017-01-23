<?php

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\OrganizationInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->myOrganizations()->subscribeCallback(function (OrganizationInterface $organization) {
    resource_pretty_print($organization);
});

$loop->run();
