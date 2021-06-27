<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\RateLimit;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyResources implements ResourcesInterface, EmptyResourceInterface
{
    public function core(): Rate
    {
        return null;
    }

    public function search(): Rate
    {
        return null;
    }
}
