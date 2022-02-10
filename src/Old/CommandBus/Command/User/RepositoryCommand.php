<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\User;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\User\RepositoryHandler")
 */
final class RepositoryCommand
{
    private string $owner;

    private string $repository;

    public function __construct(string $owner, string $repository)
    {
        $this->owner      = $owner;
        $this->repository = $repository;
    }

    public function getOwner(): string
    {
        return $this->owner;
    }

    public function getRepository(): string
    {
        return $this->repository;
    }
}
