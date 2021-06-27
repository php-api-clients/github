<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyCommit implements CommitInterface, EmptyResourceInterface
{
    public function sha(): string
    {
        return null;
    }

    public function url(): string
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

    public function message(): string
    {
        return null;
    }

    public function tree(): TreeInterface
    {
        return null;
    }

    public function commentCount(): int
    {
        return null;
    }

    public function protectionUrl(): string
    {
        return null;
    }
}
