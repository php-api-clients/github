<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\WebHooksHandler")
 */
final class WebHooksCommand
{
    private string $name;

    private string $prefix;

    public function __construct(string $name, string $prefix)
    {
        $this->name   = $name;
        $this->prefix = $prefix;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }
}
