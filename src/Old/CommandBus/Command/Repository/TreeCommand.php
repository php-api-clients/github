<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use ApiClients\Client\Github\VO\NamedBlob;
use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\TreeHandler")
 */
final class TreeCommand
{
    /**
     * @var string
     */
    private $repository;

    /**
     * @var string|null
     */
    private $baseTree;

    /**
     * @var NamedBlob[]
     */
    private $blobs;

    /**
     * @param string      $repository
     * @param string|null $baseTree
     * @param NamedBlob[] $blobs
     */
    public function __construct(string $repository, ?string $baseTree, NamedBlob ...$blobs)
    {
        $this->repository = $repository;
        $this->baseTree = $baseTree;
        $this->blobs = $blobs;
    }

    /**
     * @return string
     */
    public function getRepository(): string
    {
        return $this->repository;
    }

    /**
     * @return string|null
     */
    public function getBaseTree(): ?string
    {
        return $this->baseTree;
    }

    /**
     * @return NamedBlob[]
     */
    public function getBlobs(): array
    {
        return $this->blobs;
    }
}
