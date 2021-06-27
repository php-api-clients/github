<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyRef implements RefInterface, EmptyResourceInterface
{
    public function ref(): string
    {
        return null;
    }

    public function url(): string
    {
        return null;
    }

    public function object(): Git\Ref\Object_
    {
        return null;
    }
}
