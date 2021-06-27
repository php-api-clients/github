<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyApp implements AppInterface, EmptyResourceInterface
{
    public function id(): int
    {
        return null;
    }

    public function slug(): string
    {
        return null;
    }

    public function owner(): User
    {
        return null;
    }

    public function name(): string
    {
        return null;
    }

    public function description(): string
    {
        return null;
    }

    public function externalUrl(): string
    {
        return null;
    }

    public function htmlUrl(): string
    {
        return null;
    }

    public function createdAt(): DateTimeInterface
    {
        return null;
    }

    public function updatedAt(): DateTimeInterface
    {
        return null;
    }

    /**
     * @return array
     */
    public function permissions(): array
    {
        return null;
    }

    /**
     * @return array
     */
    public function events(): array
    {
        return null;
    }

    public function installationsCount(): int
    {
        return null;
    }
}
