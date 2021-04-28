<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyWebHook implements WebHookInterface, EmptyResourceInterface
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
    public function url(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function testUrl(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function pingUrl(): string
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
     * @return array
     */
    public function events(): array
    {
    }

    /**
     * @return bool
     */
    public function active(): bool
    {
        return null;
    }

    /**
     * @return WebHook\Config
     */
    public function config(): WebHook\Config
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
}
