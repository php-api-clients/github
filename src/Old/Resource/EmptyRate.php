<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyRate implements RateInterface, EmptyResourceInterface
{
    public function limit(): int
    {
        return null;
    }

    public function remaining(): int
    {
        return null;
    }

    public function reset(): int
    {
        return null;
    }
}
