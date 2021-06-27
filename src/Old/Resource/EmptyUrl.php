<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyUrl implements UrlInterface, EmptyResourceInterface
{
    public function url(): string
    {
        return null;
    }

    public function htmlUrl(): string
    {
        return null;
    }
}
