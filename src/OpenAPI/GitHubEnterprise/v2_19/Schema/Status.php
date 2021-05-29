<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Status
{
    public const SCHEMA_TITLE       = 'Status';
    public const SCHEMA_DESCRIPTION = 'The status of a commit.';
    private ?string $url            = null;
    private ?string $avatar_url     = null;
    private ?int $id                = null;
    private ?string $node_id        = null;
    private ?string $state          = null;
    private ?string $description    = null;
    private ?string $target_url     = null;
    private ?string $context        = null;
    private ?string $created_at     = null;
    private ?string $updated_at     = null;
    /**
     * Simple User
     */
    private array $creator = [];

    public function url(): ?string
    {
        return $this->url;
    }

    public function avatar_url(): ?string
    {
        return $this->avatar_url;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function state(): ?string
    {
        return $this->state;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function target_url(): ?string
    {
        return $this->target_url;
    }

    public function context(): ?string
    {
        return $this->context;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function creator(): array
    {
        return $this->creator;
    }
}
