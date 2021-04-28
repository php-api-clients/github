<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\ReplaceTopicsHandler")
 */
final class ReplaceTopicsCommand
{
    /**
     * @var string
     */
    private $repository;

    /**
     * @var string[]
     */
    private $topics;

    /**
     * @param string   $repository
     * @param string[] $topics
     */
    public function __construct($repository, string ...$topics)
    {
        $this->repository = $repository;
        $this->topics = $topics;
    }

    /**
     * @return string
     */
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
