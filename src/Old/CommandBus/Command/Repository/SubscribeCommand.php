<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\SubscribeHandler")
 */
final class SubscribeCommand
{
    private string $repository;

    private bool $subscribed;

    private bool $ignored;

    /**
     * @param string $ignored
     */
    public function __construct(string $repository, bool $subscribed, bool $ignored)
    {
        $this->repository = $repository;
        $this->subscribed = $subscribed;
        $this->ignored    = $ignored;
    }

    public function getRepository(): string
    {
        return $this->repository;
    }

    public function isSubscribed(): bool
    {
        return $this->subscribed;
    }

    public function isIgnored(): bool
    {
        return $this->ignored;
    }
}
