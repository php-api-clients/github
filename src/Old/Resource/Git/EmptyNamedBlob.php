<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyNamedBlob implements NamedBlobInterface, EmptyResourceInterface
{
    public function path(): string
    {
        return null;
    }

    public function mode(): string
    {
        return null;
    }

    public function type(): string
    {
        return null;
    }

    public function size(): int
    {
        return null;
    }

    public function sha(): string
    {
        return null;
    }

    public function url(): string
    {
        return null;
    }
}
