<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\DetailedCommitHandler")
 */
final class DetailedCommitCommand
{
    private string $fullName;

    private string $sha;

    public function __construct(string $fullName, string $sha)
    {
        $this->fullName = $fullName;
        $this->sha      = $sha;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getSha(): string
    {
        return $this->sha;
    }
}
