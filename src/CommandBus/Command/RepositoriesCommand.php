<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\RepositoriesHandler")
 */
final class RepositoriesCommand
{
    /**
     * @var string
     */
    private $login;

    /**
     * @param string $login
     */
    public function __construct(string $login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
}
