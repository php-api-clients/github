<?php

use ApiClients\Client\Github\Client;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$client = Client::create(require 'resolve_token.php');

$repositories = $client->user($argv[1] ?? 'WyriHaximus')->repositories();

foreach ($repositories as $repository) {
    echo "\t", 'Repository', PHP_EOL;
    echo "\t\t" . 'id: ' . $repository->id(), PHP_EOL;
    echo "\t\t" . 'name: ' . $repository->name(), PHP_EOL;
    echo "\t\t" . 'fork: ' . (int)$repository->fork(), PHP_EOL;
}
