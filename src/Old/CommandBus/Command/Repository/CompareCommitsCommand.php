<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use ApiClients\Client\Github\Resource\RepositoryInterface;
use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\CompareCommitsHandler")
 */
final class CompareCommitsCommand
{
    private RepositoryInterface $repository;

    private string $base;

    private string $head;

    public function __construct(RepositoryInterface $repository, string $base, string $head)
    {
        $this->repository = $repository;
        $this->base       = $base;
        $this->head       = $head;
    }

    public function getRepository(): RepositoryInterface
    {
        return $this->repository;
    }

    public function getBase(): string
    {
        return $this->base;
    }

    public function getHead(): string
    {
        return $this->head;
    }
}
