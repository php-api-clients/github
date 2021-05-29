<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\WebHook;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyConfig implements ConfigInterface, EmptyResourceInterface
{
    public function url(): string
    {
        return null;
    }

    public function contentType(): string
    {
        return null;
    }
}
