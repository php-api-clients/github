<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\WebHooksHandler")
 */
final class WebHooksCommand
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $prefix;

    /**
     * @param string $name
     * @param string $prefix
     */
    public function __construct(string $name, string $prefix)
    {
        $this->name = $name;
        $this->prefix = $prefix;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }
}
