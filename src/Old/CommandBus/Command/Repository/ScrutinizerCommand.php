<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\ScrutinizerHandler")
 */
final class ScrutinizerCommand
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $name;

    /**
     * @param string $login
     * @param string $name
     */
    public function __construct(string $login, string $name)
    {
        $this->login = $login;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
