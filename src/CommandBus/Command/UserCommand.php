<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\UserHandler")
 */
final class UserCommand
{
    /**
     * @var string
     */
    private $user;

    /**
     * @param string $user
     */
    public function __construct(string $user = '')
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }
}
