<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\PingWebHookHandler")
 */
final class PingWebHookCommand
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
