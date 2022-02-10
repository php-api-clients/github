<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyEvent implements EventInterface, EmptyResourceInterface
{
    public function id(): int
    {
        return null;
    }

    public function type(): string
    {
        return null;
    }

    public function actor(): User
    {
        return null;
    }

    public function repo(): RepositorySimple
    {
        return null;
    }

    /**
     * @return array
     */
    public function payload(): array
    {
    }

    public function public(): bool
    {
        return null;
    }

    public function createdAt(): DateTimeInterface
    {
        return null;
    }
}
