<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyTag implements TagInterface, EmptyResourceInterface
{
    public function name(): string
    {
        return null;
    }

    public function commit(): Tree
    {
        return null;
    }

    public function zipballUrl(): string
    {
        return null;
    }

    public function tarballUrl(): string
    {
        return null;
    }
}
