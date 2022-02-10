<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyFile implements FileInterface, EmptyResourceInterface
{
    public function filename(): string
    {
        return null;
    }

    public function additions(): int
    {
        return null;
    }

    public function deletions(): int
    {
        return null;
    }

    public function changes(): int
    {
        return null;
    }

    public function status(): string
    {
        return null;
    }

    public function rawUrl(): string
    {
        return null;
    }

    public function blobUrl(): string
    {
        return null;
    }

    public function patch(): string
    {
        return null;
    }
}
