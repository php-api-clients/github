<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class ProjectCard
{
    public const SCHEMA_TITLE = 'Project Card';
    public const SPL_HASH = '0000000045a0ecbe0000000057b08344';
    public const SCHEMA_DESCRIPTION = 'Project cards represent a scope of work.';
    private ?string $url = null;
    /**
     * The project card's ID
     */
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $note = null;
    private $creator;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    /**
     * Whether or not the card is archived
     */
    private ?bool $archived = null;
    private ?string $column_url = null;
    private ?string $content_url = null;
    private ?string $project_url = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function note() : ?string
    {
        return $this->note;
    }
    public function creator()
    {
        return $this->creator;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function archived() : ?bool
    {
        return $this->archived;
    }
    public function column_url() : ?string
    {
        return $this->column_url;
    }
    public function content_url() : ?string
    {
        return $this->content_url;
    }
    public function project_url() : ?string
    {
        return $this->project_url;
    }
}
