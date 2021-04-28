<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\SubscribeHandler")
 */
final class SubscribeCommand
{
    /**
     * @var string
     */
    private $repository;

    /**
     * @var bool
     */
    private $subscribed;

    /**
     * @var bool
     */
    private $ignored;

    /**
     * @param string $repository
     * @param bool   $subscribed
     * @param string $ignored
     */
    public function __construct(string $repository, bool $subscribed, bool $ignored)
    {
        $this->repository = $repository;
        $this->subscribed = $subscribed;
        $this->ignored = $ignored;
    }

    /**
     * @return string
     */
    public function getRepository(): string
    {
        return $this->repository;
    }

    /**
     * @return bool
     */
    public function isSubscribed(): bool
    {
        return $this->subscribed;
    }

    /**
     * @return bool
     */
    public function isIgnored(): bool
    {
        return $this->ignored;
    }
}
