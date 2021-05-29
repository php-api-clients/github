<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Event
{
    public const SCHEMA_TITLE       = 'Event';
    public const SCHEMA_DESCRIPTION = 'Event';
    private ?string $id             = null;
    private ?string $type           = null;
    /**
     * Actor
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Actor::class)
     */
    private ?Actor $actor = null;
    private array $repo   = [];
    /**
     * Actor
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Actor::class)
     */
    private ?Actor $org         = null;
    private array $payload      = [];
    private ?bool $public       = null;
    private ?string $created_at = null;

    public function id(): ?string
    {
        return $this->id;
    }

    public function type(): ?string
    {
        return $this->type;
    }

    /**
     * Actor
     */
    public function actor(): ?Actor
    {
        return $this->actor;
    }

    public function repo(): array
    {
        return $this->repo;
    }

    /**
     * Actor
     */
    public function org(): ?Actor
    {
        return $this->org;
    }

    public function payload(): array
    {
        return $this->payload;
    }

    public function public(): ?bool
    {
        return $this->public;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }
}
