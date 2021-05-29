<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyWebHook implements WebHookInterface, EmptyResourceInterface
{
    public function id(): int
    {
        return null;
    }

    public function url(): string
    {
        return null;
    }

    public function testUrl(): string
    {
        return null;
    }

    public function pingUrl(): string
    {
        return null;
    }

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

    public function active(): bool
    {
        return null;
    }

    public function config(): WebHook\Config
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
}
