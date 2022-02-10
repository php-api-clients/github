<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\RefHandler")
 */
final class RefCommand
{
    private string $repository;

    private string $ref;

    private string $commit;

    public function __construct(string $repository, string $ref, string $commit)
    {
        $this->repository = $repository;
        $this->ref        = $ref;
        $this->commit     = $commit;
    }

    public function getRepository(): string
    {
        return $this->repository;
    }

    public function getRef(): string
    {
        return $this->ref;
    }

    public function getCommit(): string
    {
        return $this->commit;
    }
}
