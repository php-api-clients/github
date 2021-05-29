<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Event
{
    public const SCHEMA_TITLE       = 'Event';
    public const SCHEMA_DESCRIPTION = 'Event';
    private string $id;
    private string $type;
    /**
     * Actor
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\Actor::class)
     */
    private Actor $actor;
    private array $repo = [];
    /**
     * Actor
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\Actor::class)
     */
    private Actor $org;
    private array $payload = [];
    private bool $public;
    private string $created_at;

    public function id(): string
    {
        return $this->id;
    }

    public function type(): string
    {
        return $this->type;
    }

    /**
     * Actor
     */
    public function actor(): Actor
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
    public function org(): Actor
    {
        return $this->org;
    }

    public function payload(): array
    {
        return $this->payload;
    }

    public function public(): bool
    {
        return $this->public;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }
}
