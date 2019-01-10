<?php declare(strict_types=1);

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Contents\File;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\UserInterface;
use React\EventLoop\Factory;
use React\Stream\ThroughStream;
use Rx\React\Promise;
use function ApiClients\Foundation\resource_pretty_print;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->user($argv[1] ?? 'WyriHaximus')->then(function (UserInterface $user) use ($argv) {
    resource_pretty_print($user);

    return $user->repository($argv[2] ?? 'php-api-clients-github-fidget-sandbox');
})->then(function (Repository $repository) use ($argv) {
    resource_pretty_print($repository);

    return Promise::fromObservable($repository->contents()->filter(function (File $file) {
        return $file->name() === 'test';
    }));
})->then(function (File $file) use ($loop) {
    $stream = new ThroughStream();
    $loop->addTimer(1, function () use ($stream) {
        $stream->end(\implode(\PHP_EOL, \str_split(\bin2hex(\random_bytes(1024 * 1024)), 32)));
    });

    return $file->update($stream);
})->done(function ($resource) {
    resource_pretty_print($resource);
}, 'display_throwable');

$loop->run();

displayState($client->getRateLimitState());
