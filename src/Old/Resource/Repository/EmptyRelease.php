<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyRelease implements ReleaseInterface, EmptyResourceInterface
{
    public function id(): int
    {
        return null;
    }

    public function tagName(): string
    {
        return null;
    }

    public function targetCommitish(): string
    {
        return null;
    }

    public function name(): string
    {
        return null;
    }

    public function body(): string
    {
        return null;
    }

    public function draft(): bool
    {
        return null;
    }

    public function prerelease(): bool
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

    public function author(): User
    {
        return null;
    }

    /**
     * @return array
     */
    public function assets(): array
    {
    }
}
