<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\User;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\User\RepositoriesHandler")
 */
final class RepositoriesCommand
{
    private string $login;

    public function __construct(string $login)
    {
        $this->login = $login;
    }

    public function getLogin(): string
    {
        return $this->login;
    }
}
