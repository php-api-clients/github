<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command;

use ApiClients\Foundation\Resource\ResourceInterface;
use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\SaveHandler")
 */
final class SaveCommand
{
    /**
     * @var string
     */
    private $hydrateClass;

    /**
     * @var array
     */
    private $data;

    /**
     * @var string
     */
    private $url;

    /**
     * @param string $hydrateClass
     * @param array $data
     * @param string $url
     */
    public function __construct(string $hydrateClass, array $data, string $url)
    {
        $this->hydrateClass = $hydrateClass;
        $this->data = $data;
        $this->url = $url;
    }

    /**
     * @return string
     */
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

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
