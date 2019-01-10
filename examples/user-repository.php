<?php declare(strict_types=1);
use ApiClients\Client\Github\Client;
use function ApiClients\Foundation\resource_pretty_print;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$client = Client::create(require 'resolve_token.php');

$repository = $client->user($argv[1] ?? 'php-api-clients')->repository($argv[2] ?? 'github');
resource_pretty_print($repository);

displayState($client->getRateLimitState());
