<?php declare(strict_types=1);

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Label;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\Async\User;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use React\EventLoop\Factory;
use function React\Promise\resolve;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

unwrapObservableFromPromise($client->user($argv[1])->then(function (User $user) {
    return resolve($user->repositories());
}))->filter(function (Repository $repository) {
    return $repository->fork() === false;
})->subscribe(function (Repository $repository) {
    $hasHacktoberfestLabel = false;
    $repository->labels()->filter(function (Label $label) {
        return \strtolower($label->name()) === 'hacktoberfest';
    })->subscribe(function () use (&$hasHacktoberfestLabel) {
        $hasHacktoberfestLabel = true;
    }, function ($error) {
        echo (string)$error;
    }, function () use ($repository, &$hasHacktoberfestLabel) {
        if ($hasHacktoberfestLabel === true) {
            echo $repository->fullName(), ' ✗', \PHP_EOL;

            return;
        }

        $repository->addLabel('hacktoberfest', '3241a6')->done(function () use ($repository) {
            echo $repository->fullName(), ' ✓', \PHP_EOL;
        });
    });
}, function ($error) {
    echo (string)$error;
});

$loop->run();

displayState($client->getRateLimitState());
