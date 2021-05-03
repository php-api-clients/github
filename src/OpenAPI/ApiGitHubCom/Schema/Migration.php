<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Migration
{
    public const SCHEMA_TITLE = 'Migration';
    public const SPL_HASH = '00000000729dd2c600000000797f0b2e';
    public const SCHEMA_DESCRIPTION = 'A migration.';
    private ?int $id = null;
    private $owner;
    private ?string $guid = null;
    private ?string $state = null;
    private ?bool $lock_repositories = null;
    private ?bool $exclude_attachments = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository>
     */
    private array $repositories = array();
    private ?string $url = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private ?string $node_id = null;
    private ?string $archive_url = null;
    private array $exclude = array();
    public function id() : ?int
    {
        return $this->id;
    }
    public function owner()
    {
        return $this->owner;
    }
    public function guid() : ?string
    {
        return $this->guid;
    }
    public function state() : ?string
    {
        return $this->state;
    }
    public function lock_repositories() : ?bool
    {
        return $this->lock_repositories;
    }
    public function exclude_attachments() : ?bool
    {
        return $this->exclude_attachments;
    }
    public function repositories() : array
    {
        return $this->repositories;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function archive_url() : ?string
    {
        return $this->archive_url;
    }
    public function exclude() : array
    {
        return $this->exclude;
    }
}
