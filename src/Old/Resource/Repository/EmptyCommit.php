<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyCommit implements CommitInterface, EmptyResourceInterface
{
    public function url(): string
    {
        return null;
    }

    public function sha(): string
    {
        return null;
    }

    public function htmlUrl(): string
    {
        return null;
    }

    public function commit(): Git\Commit
    {
        return null;
    }

    public function author(): User
    {
        return null;
    }

    public function comitter(): User
    {
        return null;
    }

    public function parents(): Tree
    {
        return null;
    }

    public function files(): Repository\Commit\File
    {
        return null;
    }
}
