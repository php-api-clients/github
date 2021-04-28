<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyEvent implements EventInterface, EmptyResourceInterface
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
    public function type(): string
    {
        return null;
    }

    /**
     * @return User
     */
    public function actor(): User
    {
        return null;
    }

    /**
     * @return RepositorySimple
     */
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

    /**
     * @return bool
     */
    public function public(): bool
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
}
