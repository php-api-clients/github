<?php declare(strict_types=1);

namespace ApiClients\Github\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Github\CommandBus\Handler\IteratePagesHandler")
 */
final class IteratePagesCommand
{
    /**
     * @var string
     */
    private $path;

    /**
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
}
