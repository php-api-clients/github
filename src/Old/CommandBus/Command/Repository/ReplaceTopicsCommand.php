<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\ReplaceTopicsHandler")
 */
final class ReplaceTopicsCommand
{
    private string $repository;

    /** @var string[] */
    private array $topics;

    /**
     * @param string[] $topics
     */
    public function __construct(string $repository, string ...$topics)
    {
        $this->repository = $repository;
        $this->topics     = $topics;
    }

    public function getRepository(): string
    {
        return $this->repository;
    }

    /**
     * @return string[]
     */
    public function getTopics(): array
    {
        return $this->topics;
    }
}
