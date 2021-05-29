<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ProjectColumn
{
    public const SCHEMA_TITLE       = 'Project Column';
    public const SCHEMA_DESCRIPTION = 'Project columns contain cards of work.';
    private ?string $url            = null;
    private ?string $project_url    = null;
    private ?string $cards_url      = null;
    /**
     * The unique identifier of the project column
     */
    private ?int $id         = null;
    private ?string $node_id = null;
    /**
     * Name of the project column
     */
    private ?string $name       = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;

    public function url(): ?string
    {
        return $this->url;
    }

    public function project_url(): ?string
    {
        return $this->project_url;
    }

    public function cards_url(): ?string
    {
        return $this->cards_url;
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

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }
}
