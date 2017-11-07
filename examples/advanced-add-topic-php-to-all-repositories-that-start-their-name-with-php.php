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

// Fetch the user/org given as first argument to this script
unwrapObservableFromPromise($githubClient->user($argv[1])->then(function (UserInterface $user) use ($argv) {
    resource_pretty_print($user);

    // Get all repositories for the given user
    return $user->repositories();
}))->filter(function (Repository $repository) {
    // Filter out forks
    return !$repository->fork();
})->filter(function (Repository $repository) {
    // Filter out repositories with nothing in them
    return $repository->size() > 0;
})->filter(function (Repository $repository) {
    // Filter out all repositories that start their name with php
    return substr($repository->name(), 0, 3) === 'php';
})->filter(function (Repository $repository) {
    // Be sure the repository doesn't have PHP in it's topics already
    return !in_array('php', $repository->topics(), true);
})->subscribe(function (Repository $repository) {
    // Add php to the list of topics and update (replace) the topics
    $topics = $repository->topics();
    $topics[] = 'php';

    $repository->replaceTopics(...$topics);
}, 'display_throwable');

$loop->run();

displayState($client->getRateLimitState());
