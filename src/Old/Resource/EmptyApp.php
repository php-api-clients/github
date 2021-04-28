<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyApp implements AppInterface, EmptyResourceInterface
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
    public function slug(): string
    {
        return null;
    }

    /**
     * @return User
     */
    public function owner(): User
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
    public function description(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function externalUrl(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function htmlUrl(): string
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

    /**
     * @return int
     */
    public function installationsCount(): int
    {
        return null;
    }
}
