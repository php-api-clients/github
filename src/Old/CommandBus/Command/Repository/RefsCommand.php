<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\RefsHandler")
 */
final class RefsCommand
{
    private string $fullName;

    private ?string $namespace = null;

    public function __construct(string $fullName, ?string $namespace)
    {
        $this->fullName  = $fullName;
        $this->namespace = $namespace;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getNamespace(): ?string
    {
        return $this->namespace;
    }
}
