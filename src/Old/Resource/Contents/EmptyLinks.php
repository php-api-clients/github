<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyLinks implements LinksInterface, EmptyResourceInterface
{
    public function git(): string
    {
        return null;
    }

    public function self(): string
    {
        return null;
    }

    public function html(): string
    {
        return null;
    }
}
