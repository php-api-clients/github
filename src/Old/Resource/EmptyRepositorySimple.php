<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyRepositorySimple implements RepositorySimpleInterface, EmptyResourceInterface
{
    public function id(): int
    {
        return null;
    }

    public function name(): string
    {
        return null;
    }

    public function url(): string
    {
        return null;
    }
}
