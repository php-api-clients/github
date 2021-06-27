<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use React\Stream\ReadableStreamInterface;
use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\BlobHandler")
 */
final class BlobCommand
{
    private string $repository;

    private ReadableStreamInterface $contents;

    public function __construct(string $repository, ReadableStreamInterface $contents)
    {
        $this->repository = $repository;
        $this->contents   = $contents;
    }

    public function getRepository(): string
    {
        return $this->repository;
    }

    public function getContents(): ReadableStreamInterface
    {
        return $this->contents;
    }
}
