<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyUser implements UserInterface, EmptyResourceInterface
{
    public function name(): string
    {
        return null;
    }

    public function email(): string
    {
        return null;
    }

    public function date(): DateTimeInterface
    {
        return null;
    }
}
