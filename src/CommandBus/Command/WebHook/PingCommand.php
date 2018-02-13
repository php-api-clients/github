<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\WebHook;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\WebHook\PingHandler")
 */
final class PingCommand
{
    /**
     * @var string
     */
    private $pingUrl;

    /**
     * @param string $pingUrl
     */
    public function __construct(string $pingUrl)
    {
        $this->pingUrl = $pingUrl;
    }

    /**
     * @return string
     */
    public function getPingUrl(): string
    {
        return $this->pingUrl;
    }
}
