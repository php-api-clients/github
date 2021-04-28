<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command;

use ApiClients\Foundation\Resource\ResourceInterface;
use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\RefreshHandler")
 */
final class RefreshCommand
{
    /**
     * @var ResourceInterface
     */
    private $resource;

    /**
     * @param ResourceInterface $resource
     */
    public function __construct(ResourceInterface $resource)
    {
        $this->resource = $resource;
    }

    /**
     * @return ResourceInterface
     */
    public function getResource(): ResourceInterface
    {
        return $this->resource;
    }
}
