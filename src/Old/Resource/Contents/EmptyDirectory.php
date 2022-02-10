<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyDirectory implements DirectoryInterface, EmptyResourceInterface
{
    public function type(): string
    {
        return null;
    }

    public function encoding(): string
    {
        return null;
    }

    public function size(): int
    {
        return null;
    }

    public function name(): string
    {
        return null;
    }

    public function path(): string
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

    public function gitUrl(): string
    {
        return null;
    }

    public function htmlUrl(): string
    {
        return null;
    }

    public function downloadUrl(): string
    {
        return null;
    }

    public function repositoryFullname(): string
    {
        return null;
    }

    public function links(): Links
    {
        return null;
    }
}
