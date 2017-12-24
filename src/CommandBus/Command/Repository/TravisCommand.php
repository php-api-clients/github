<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\TravisHandler")
 */
final class TravisCommand
{
    /**
     * @var string
     */
    private $repository;

    /**
     * @param string $repository
     */
    public function __construct(string $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return string
     */
    public function getRepository(): string
    {
        return $this->repository;
    }
}
