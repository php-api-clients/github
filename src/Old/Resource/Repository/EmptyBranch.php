<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyBranch implements BranchInterface, EmptyResourceInterface
{
    public function name(): string
    {
        return null;
    }

    public function commit(): TreeInterface
    {
        return null;
    }

    public function protected(): bool
    {
        return null;
    }

    public function protectionUrl(): string
    {
        return null;
    }
}
