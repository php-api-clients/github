<?php

use React\EventLoop\Factory;
use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\UserInterface;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = new AsyncClient($loop, require 'resolve_token.php');

$client->whoami()->then(function (UserInterface $user) {
    resource_pretty_print($user);
});

$loop->run();
