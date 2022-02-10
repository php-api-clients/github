<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyLabel implements LabelInterface, EmptyResourceInterface
{
    public function url(): string
    {
        return null;
    }

    public function name(): string
    {
        return null;
    }

    public function color(): string
    {
        return null;
    }
}
