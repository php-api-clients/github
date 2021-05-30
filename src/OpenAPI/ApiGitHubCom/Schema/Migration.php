<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Migration
{
    public const SCHEMA_TITLE = 'Migration';
    public const SCHEMA_DESCRIPTION = 'A migration.';
    private int $id;
    private $owner;
    private string $guid;
    private string $state;
    private bool $lock_repositories;
    private bool $exclude_attachments;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository::class)
     */
    private array $repositories = array();
    private string $url;
    private string $created_at;
    private string $updated_at;
    private string $node_id;
    private string $archive_url;
    private array $exclude = array();
    public function id() : int
    {
        return $this->id;
    }
    public function owner()
    {
        return $this->owner;
    }
    public function guid() : string
    {
        return $this->guid;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function lock_repositories() : bool
    {
        return $this->lock_repositories;
    }
    public function exclude_attachments() : bool
    {
        return $this->exclude_attachments;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository>
     */
    public function repositories() : array
    {
        return $this->repositories;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function archive_url() : string
    {
        return $this->archive_url;
    }
    public function exclude() : array
    {
        return $this->exclude;
    }
}
