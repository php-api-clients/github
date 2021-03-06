<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Organization;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Organization\AddWebHookHandler")
 */
final class AddWebHookCommand
{
    /**
     * @var string
     */
    private $organization;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $config;

    /**
     * @var array
     */
    private $events;

    /**
     * @var bool
     */
    private $active;

    /**
     * @param string $organization
     * @param string $name
     * @param array  $config
     * @param array  $events
     * @param bool   $active
     */
    public function __construct(string $organization, string $name, array $config, array $events, bool $active)
    {
        $this->organization = $organization;
        $this->name = $name;
        $this->config = $config;
        $this->events = $events;
        $this->active = $active;
    }

    /**
     * @return string
     */
    public function getOrganization(): string
    {
        return $this->organization;
    }

    /**
     * @return string
     */
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

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }
}
