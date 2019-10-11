<?php declare(strict_types=1);

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Git\Commit;
use ApiClients\Client\Github\Resource\Async\Git\Ref;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\Async\User;
use ApiClients\Client\Github\Resource\Git\RefInterface;
use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Client\Github\VO\NamedBlob;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use React\EventLoop\Factory;
use React\Stream\ThroughStream;
use Rx\React\Promise;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

unwrapObservableFromPromise($client->user($argv[1] ?? 'WyriHaximus')->then(function (User $user) use ($argv) {
    return $user->repositories();
}))->filter(function (Repository $repository) {
    return $repository->private() === false;
})->filter(function (Repository $repository) {
    return $repository->fork() === false;
})->filter(function (Repository $repository) {
    return $repository->name() !== 'reactphp-simple-orm';
})->filter(function (Repository $repository) {
    return \strpos($repository->name(), 'reactphp') !== false;
})->subscribe(function (Repository $repository) use ($argv, $loop) {
    $stream = new ThroughStream();

    $loop->addTimer(1, function () use ($stream, $argv) {
        $stream->end('github: ' . $argv[1]);
    });

    return $repository->blob($stream)->then(function (TreeInterface $tree) use ($repository) {
        return Promise::fromObservable($repository->commits()->take(1))->then(function (Repository\Commit $commit) use ($tree, $repository) {
            return $repository->tree(
                $commit->commit()->tree()->sha(),
                new NamedBlob(
                    '.github/FUNDING.yml',
                    '100644',
                    'blob',
                    $tree->sha(),
                    null
                )
            )->then(function (\ApiClients\Client\Github\Resource\Git\TreeInterface $tree) use ($repository, $commit) {
                return $repository->commit(
                    'Added Github Sponsors',
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
                return resolve(true);
            }

            return $repository->ref($ref, $commit);
        });
    })->done(function () use ($repository) {
        echo $repository->htmlUrl(), \PHP_EOL;
    }, 'display_throwable');
}, 'display_throwable');

$loop->run();

displayState($client->getRateLimitState());
