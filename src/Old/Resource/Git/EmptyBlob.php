<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyBlob implements BlobInterface, EmptyResourceInterface
{
    public function sha(): string
    {
        return null;
    }

    public function url(): string
    {
        return null;
    }

    /**
     * @return array
     */
    public function tree(): array
    {
    }

    public function truncated(): bool
    {
        return null;
    }
}
