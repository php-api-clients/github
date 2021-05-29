<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyCompare implements CompareInterface, EmptyResourceInterface
{
    public function url(): string
    {
        return null;
    }

    public function baseCommit(): Repository\Commit
    {
        return null;
    }

    public function mergeBaseCommit(): Repository\Commit
    {
        return null;
    }

    public function status(): string
    {
        return null;
    }

    public function aheadBy(): int
    {
        return null;
    }

    public function behindBy(): int
    {
        return null;
    }

    public function totalCommits(): int
    {
        return null;
    }

    public function commits(): Repository\Commit
    {
        return null;
    }

    public function files(): Repository\Commit\File
    {
        return null;
    }
}
