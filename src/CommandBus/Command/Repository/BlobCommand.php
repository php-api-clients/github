<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use React\Stream\ReadableStreamInterface;
use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\BlobHandler")
 */
final class BlobCommand
{
    /**
     * @var string
     */
    private $repository;

    /**
     * @var ReadableStreamInterface
     */
    private $contents;

    /**
     * @param string                  $repository
     * @param ReadableStreamInterface $contents
     */
    public function __construct(string $repository, ReadableStreamInterface $contents)
    {
        $this->repository = $repository;
        $this->contents = $contents;
    }

    /**
     * @return string
     */
    public function getRepository(): string
    {
        return $this->repository;
    }

    /**
     * @return ReadableStreamInterface
     */
    public function getContents(): ReadableStreamInterface
    {
        return $this->contents;
    }
}
