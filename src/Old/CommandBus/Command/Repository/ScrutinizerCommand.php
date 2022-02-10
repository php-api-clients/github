<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\ScrutinizerHandler")
 */
final class ScrutinizerCommand
{
    private string $login;

    private string $name;

    public function __construct(string $login, string $name)
    {
        $this->login = $login;
        $this->name  = $name;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
