<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\AddWebHookHandler")
 */
final class AddWebHookCommand
{
    private string $repository;

    private string $name;

    /** @var array */
    private array $config;

    /** @var array */
    private array $events;

    private bool $active;

    /**
     * @param array $config
     * @param array $events
     */
    public function __construct(string $repository, string $name, array $config, array $events, bool $active)
    {
        $this->repository = $repository;
        $this->name       = $name;
        $this->config     = $config;
        $this->events     = $events;
        $this->active     = $active;
    }

    public function getRepository(): string
    {
        return $this->repository;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * @return array
     */
    public function getEvents(): array
    {
        return $this->events;
    }

    public function isActive(): bool
    {
        return $this->active;
    }
}
