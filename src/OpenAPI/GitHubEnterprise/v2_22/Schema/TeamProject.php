<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class TeamProject
{
    public const SCHEMA_TITLE       = 'Team Project';
    public const SCHEMA_DESCRIPTION = 'A team\'s access to a project.';
    private ?string $owner_url      = null;
    private ?string $url            = null;
    private ?string $html_url       = null;
    private ?string $columns_url    = null;
    private ?int $id                = null;
    private ?string $node_id        = null;
    private ?string $name           = null;
    private ?string $body           = null;
    private ?int $number            = null;
    private ?string $state          = null;
    /**
     * Simple User
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\SimpleUser::class)
     */
    private ?SimpleUser $creator = null;
    private ?string $created_at  = null;
    private ?string $updated_at  = null;
    /**
     * The organization permission for this project. Only present when owner is an organization.
     */
    private ?string $organization_permission = null;
    /**
     * Whether the project is private or not. Only present when owner is an organization.
     */
    private ?bool $private     = null;
    private array $permissions = [];

    public function owner_url(): ?string
    {
        return $this->owner_url;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function columns_url(): ?string
    {
        return $this->columns_url;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function body(): ?string
    {
        return $this->body;
    }

    public function number(): ?int
    {
        return $this->number;
    }

    public function state(): ?string
    {
        return $this->state;
    }

    /**
     * Simple User
     */
    public function creator(): ?SimpleUser
    {
        return $this->creator;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    /**
     * The organization permission for this project. Only present when owner is an organization.
     */
    public function organization_permission(): ?string
    {
        return $this->organization_permission;
    }

    /**
     * Whether the project is private or not. Only present when owner is an organization.
     */
    public function private(): ?bool
    {
        return $this->private;
    }

    public function permissions(): array
    {
        return $this->permissions;
    }
}
