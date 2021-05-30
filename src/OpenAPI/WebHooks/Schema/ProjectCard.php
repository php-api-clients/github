<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class ProjectCard
{
    public const SCHEMA_TITLE = 'Project Card';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private string $project_url;
    private string $column_url;
    private int $column_id;
    /**
     * The project card's ID
     */
    private int $id;
    private string $node_id;
    private $note;
    /**
     * Whether or not the card is archived
     */
    private bool $archived;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $creator;
    private string $created_at;
    private string $updated_at;
    private string $content_url;
    private null $after_id;
    public function url() : string
    {
        return $this->url;
    }
    public function project_url() : string
    {
        return $this->project_url;
    }
    public function column_url() : string
    {
        return $this->column_url;
    }
    public function column_id() : int
    {
        return $this->column_id;
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
    public function note()
    {
        return $this->note;
    }
    /**
     * Whether or not the card is archived
     */
    public function archived() : bool
    {
        return $this->archived;
    }
    public function creator() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
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
    public function content_url() : string
    {
        return $this->content_url;
    }
    public function after_id() : null
    {
        return $this->after_id;
    }
}
