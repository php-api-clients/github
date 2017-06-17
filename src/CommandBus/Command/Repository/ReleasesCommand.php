<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\ReleasesHandler")
 */
final class ReleasesCommand
{
    /**
     * @var string
     */
    private $fullName;

    /**
     * @param string $fullName
     */
    public function __construct(string $fullName)
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
