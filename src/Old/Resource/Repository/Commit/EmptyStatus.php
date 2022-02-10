<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyStatus implements StatusInterface, EmptyResourceInterface
{
    public function createdAt(): DateTimeInterface
    {
        return null;
    }

    public function updatedAt(): DateTimeInterface
    {
        return null;
    }

    public function state(): string
    {
        return null;
    }

    public function targetUrl(): string
    {
        return null;
    }

    public function description(): string
    {
        return null;
    }

    public function id(): int
    {
        return null;
    }

    public function url(): string
    {
        return null;
    }

    public function context(): string
    {
        return null;
    }

    public function creator(): User
    {
        return null;
    }
}
