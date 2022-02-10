<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\CommitsHandler")
 */
final class CommitsCommand
{
    private string $fullName;

    public function __construct(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }
}
