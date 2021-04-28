<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyRelease implements ReleaseInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function tagName(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function targetCommitish(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function body(): string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function draft(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function prerelease(): bool
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function createdAt(): DateTimeInterface
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function updatedAt(): DateTimeInterface
    {
        return null;
    }

    /**
     * @return User
     */
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
