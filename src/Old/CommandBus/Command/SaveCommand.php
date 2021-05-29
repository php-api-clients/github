<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\SaveHandler")
 */
final class SaveCommand
{
    private string $hydrateClass;

    /** @var array */
    private array $data;

    private string $url;

    /**
     * @param array $data
     */
    public function __construct(string $hydrateClass, array $data, string $url)
    {
        $this->hydrateClass = $hydrateClass;
        $this->data         = $data;
        $this->url          = $url;
    }

    public function getHydrateClass(): string
    {
        return $this->hydrateClass;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
