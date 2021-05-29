<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use ApiClients\Client\Github\VO\NamedBlob;
use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\TreeHandler")
 */
final class TreeCommand
{
    private string $repository;

    private ?string $baseTree = null;

    /** @var NamedBlob[] */
    private array $blobs;

    /**
     * @param NamedBlob[] $blobs
     */
    public function __construct(string $repository, ?string $baseTree, NamedBlob ...$blobs)
    {
        $this->repository = $repository;
        $this->baseTree   = $baseTree;
        $this->blobs      = $blobs;
    }

    public function getRepository(): string
    {
        return $this->repository;
    }

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
