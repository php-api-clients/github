<?php declare(strict_types=1);

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\UserInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

unwrapObservableFromPromise($client->user($argv[1])->then(function (UserInterface $user) use ($argv) {
    resource_pretty_print($user);

    return $user->repositories();
}))->filter(function (Repository $repository) {
    return !$repository->fork();
})->filter(function (Repository $repository) {
    return $repository->size() > 0;
})->filter(function (Repository $repository) {
    return substr($repository->name(), 0, 3) === 'php';
})->filter(function (Repository $repository) {
    return !in_array('php', $repository->topics(), true);
})->subscribe(function (Repository $repository) {
    $topics = $repository->topics();
    $topics[] = 'php';

    $repository->replaceTopics(...$topics);
}, 'display_throwable');

$loop->run();

displayState($client->getRateLimitState());
