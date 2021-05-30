<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ProjectCard
{
    public const SCHEMA_TITLE = 'Project Card';
    public const SCHEMA_DESCRIPTION = 'Project cards represent a scope of work.';
    private string $url;
    /**
     * The project card's ID
     */
    private int $id;
    private string $node_id;
    private string $note;
    private $creator;
    private string $created_at;
    private string $updated_at;
    /**
     * Whether or not the card is archived
     */
    private bool $archived;
    private string $column_url;
    private string $content_url;
    private string $project_url;
    public function url() : string
    {
        return $this->url;
    }
    /**
     * The project card's ID
     */
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function note() : string
    {
        return $this->note;
    }
    public function creator()
    {
        return $this->creator;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * Whether or not the card is archived
     */
    public function archived() : bool
    {
        return $this->archived;
    }
    public function column_url() : string
    {
        return $this->column_url;
    }
    public function content_url() : string
    {
        return $this->content_url;
    }
    public function project_url() : string
    {
        return $this->project_url;
    }
}
