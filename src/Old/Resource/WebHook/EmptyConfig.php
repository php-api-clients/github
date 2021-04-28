<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\WebHook;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyConfig implements ConfigInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function url(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function contentType(): string
    {
        return null;
    }
}
