<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyRateLimit implements RateLimitInterface, EmptyResourceInterface
{
    public function resources(): RateLimit\Resource
    {
        return null;
    }

    public function rate(): Rate
    {
        return null;
    }
}
