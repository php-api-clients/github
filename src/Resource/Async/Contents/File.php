<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Contents;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\Resource\Contents\File as BaseFile;
use React\Promise\CancellablePromiseInterface;
use React\Stream\ReadableStreamInterface;
use React\Stream\ThroughStream;

class File extends BaseFile
{
    public function refresh(): CancellablePromiseInterface
    {
        return $this->handleCommand(new RefreshCommand($this));
    }

    public function update(
        ReadableStreamInterface $contents,
        string $message = null
    ): CancellablePromiseInterface {
        $bodyStream = new ThroughStream();
    }
}
