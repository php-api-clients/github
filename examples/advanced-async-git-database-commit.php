<?php declare(strict_types=1);

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Git\Commit;
use ApiClients\Client\Github\Resource\Async\Git\Ref;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\Git\RefInterface;
use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Client\Github\VO\NamedBlob;
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;
use React\Stream\ThroughStream;
use Rx\React\Promise;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->user($argv[1] ?? 'WyriHaximus')->then(function (UserInterface $user) use ($argv) {
    resource_pretty_print($user);

    return $user->repository($argv[2] ?? 'php-api-clients-github-client-playground-expert-octo-spork');
})->then(function (Repository $repository) use ($argv, $loop) {
    resource_pretty_print($repository);

    $stream = new ThroughStream();

    $loop->addTimer(1, function () use ($stream) {
        $stream->end(\bin2hex(\random_bytes(2048)));
    });

    return $repository->blob($stream)->then(function (TreeInterface $tree) use ($repository) {
        resource_pretty_print($tree);

        return Promise::fromObservable($repository->commits()->take(1))->then(function (Repository\Commit $commit) use ($tree, $repository) {
            return $repository->tree(
                $commit->commit()->tree()->sha(),
                new NamedBlob(
                    \bin2hex(\random_bytes(13)),
                    '100644',
                    'blob',
                    $tree->sha(),
                    null
                )
            )->then(function (\ApiClients\Client\Github\Resource\Git\TreeInterface $tree) use ($repository, $commit) {
                return $repository->commit(
                    'Commit message: ' . \bin2hex(\random_bytes(13)),
                    $tree,
                    $commit->sha()
                );
            });
        });
    })->then(function (Commit $commit) use ($repository) {
        return Promise::fromObservable($repository->refs()->filter(function (RefInterface $ref) {
            return $ref->ref() === 'refs/heads/master';
        }))->then(function (?Ref $ref) use ($repository, $commit) {
            if ($ref === null) {
                die('whoops');

                return;
            }

            return $repository->ref($ref, $commit);
        });
    });
})->done(function ($resource) {
    resource_pretty_print($resource);
}, 'display_throwable');

$loop->run();

displayState($client->getRateLimitState());
