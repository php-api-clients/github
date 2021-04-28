<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\CommunityHealthHandler")
 */
final class CommunityHealthCommand
{
    /**
     * @var string
     */
    private $fullName;

    /**
     * CommunityHealthCommand constructor.
     * @param string $fullName
     */
    public function __construct($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }
}
