<?php declare(strict_types=1);
use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\Async\User;
use ApiClients\Client\Github\Resource\Repository\Commit\CombinedStatusInterface;
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();

$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->user($argv[1] ?? 'php-api-clients')->then(function (User $user) use ($argv) {
    resource_pretty_print($user);

    return $user->repository($argv[2] ?? 'github');
})->then(function (Repository $repository) {
    resource_pretty_print($repository, 1, true);

    return $repository->commits()->take(1)->toPromise();
})->then(function (Repository\Commit $commit) {
    return $commit->status();
})->then(function (CombinedStatusInterface $combinedStatus) {
    resource_pretty_print($combinedStatus, 3, true);

    return $combinedStatus->refresh();
})->then(function (CombinedStatusInterface $combinedStatus) {
    resource_pretty_print($combinedStatus, 3, true);
})->done(null, 'display_throwable');

$loop->run();

displayState($client->getRateLimitState());
