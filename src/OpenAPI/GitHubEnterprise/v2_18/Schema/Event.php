<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Event
{
    public const SCHEMA_TITLE       = 'Event';
    public const SCHEMA_DESCRIPTION = 'Event';
    private ?string $id             = null;
    private ?string $type           = null;
    /**
     * Actor
     */
    private array $actor = [];
    private array $repo  = [];
    /**
     * Actor
     */
    private array $org          = [];
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

    public function actor(): array
    {
        return $this->actor;
    }

    public function repo(): array
    {
        return $this->repo;
    }

    public function org(): array
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
