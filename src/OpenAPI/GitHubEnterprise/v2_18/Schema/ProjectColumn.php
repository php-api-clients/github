<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class ProjectColumn
{
    public const SCHEMA_TITLE       = 'Project Column';
    public const SCHEMA_DESCRIPTION = 'Project columns contain cards of work.';
    private string $url;
    private string $project_url;
    private string $cards_url;
    /**
     * The unique identifier of the project column
     */
    private int $id;
    private string $node_id;
    /**
     * Name of the project column
     */
    private string $name;
    private string $created_at;
    private string $updated_at;

    public function url(): string
    {
        return $this->url;
    }

    public function project_url(): string
    {
        return $this->project_url;
    }

    public function cards_url(): string
    {
        return $this->cards_url;
    }

    /**
     * The unique identifier of the project column
     */
    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    /**
     * Name of the project column
     */
    public function name(): string
    {
        return $this->name;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }
}
