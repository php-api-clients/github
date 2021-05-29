<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy;

final class Apps
{
    public const SCHEMA_TITLE       = 'branch-restriction-policy::apps';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $id                = null;
    private ?string $slug           = null;
    private ?string $node_id        = null;
    private array $owner            = [];
    private ?string $name           = null;
    private ?string $description    = null;
    private ?string $external_url   = null;
    private ?string $html_url       = null;
    private ?string $created_at     = null;
    private ?string $updated_at     = null;
    private array $permissions      = [];
    private array $events           = [];

    public function id(): ?int
    {
        return $this->id;
    }

    public function slug(): ?string
    {
        return $this->slug;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function owner(): array
    {
        return $this->owner;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function external_url(): ?string
    {
        return $this->external_url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function permissions(): array
    {
        return $this->permissions;
    }

    public function events(): array
    {
        return $this->events;
    }
}
