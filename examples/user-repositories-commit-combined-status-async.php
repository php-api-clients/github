<?php

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\Async\User;
use ApiClients\Client\Github\Resource\Repository\Commit\CombinedStatusInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;
use Rx\Observable;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();

$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->user($argv[1] ?? 'php-api-clients')->then(function (User $user) use ($argv) {
    resource_pretty_print($user);
    return $user->repository($argv[2] ?? 'github');
})->then(function (Repository $repository) {
    resource_pretty_print($repository, 1, true);
    $repository->commits()->take(1)->subscribe(function (Repository\Commit $commit) {
        $commit->status()->done(function (CombinedStatusInterface $combinedStatus) {
            resource_pretty_print($combinedStatus, 3, true);
        }, 'display_throwable');
    }, 'display_throwable');
})->done(null, 'display_throwable');

$loop->run();
