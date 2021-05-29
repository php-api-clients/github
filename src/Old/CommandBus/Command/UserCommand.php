<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\UserHandler")
 */
final class UserCommand
{
    private string $user;

    public function __construct(string $user = '')
    {
        $this->user = $user;
    }

    public function getUser(): string
    {
        return $this->user;
    }
}
