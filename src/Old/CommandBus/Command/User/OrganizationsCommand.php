<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\User;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\User\OrganizationsHandler")
 */
final class OrganizationsCommand
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
