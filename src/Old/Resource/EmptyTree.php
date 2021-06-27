<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyTree implements TreeInterface, EmptyResourceInterface
{
    public function url(): string
    {
        return null;
    }

    public function sha(): string
    {
        return null;
    }
}
