<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Organization;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Organization\AddWebHookHandler")
 */
final class AddWebHookCommand
{
    private string $organization;

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
    public function __construct(string $organization, string $name, array $config, array $events, bool $active)
    {
        $this->organization = $organization;
        $this->name         = $name;
        $this->config       = $config;
        $this->events       = $events;
        $this->active       = $active;
    }

    public function getOrganization(): string
    {
        return $this->organization;
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
