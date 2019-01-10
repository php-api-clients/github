<?php declare(strict_types=1);

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Organization;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

$organizations = [
    'php-api-clients',
    'reactphp',
    'recoilphp',
];

if (\count($argv) > 1) {
    unset($argv[0]);
    foreach ($argv as $organization) {
        $organizations[] = $organization;
    }
}

foreach ($organizations as $organization) {
    $client->organization($organization)->then(function (Organization $user) {
        resource_pretty_print($user);

        return $user->refresh();
    })->done(function (Organization $user) {
        resource_pretty_print($user);
    }, 'display_throwable');
}

$loop->run();

displayState($client->getRateLimitState());
