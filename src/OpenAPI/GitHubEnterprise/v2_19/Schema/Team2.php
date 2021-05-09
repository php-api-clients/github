<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Team2
{
    public const SCHEMA_TITLE = 'team-2';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $url = null;
    private ?string $name = null;
    private ?string $slug = null;
    private ?string $description = null;
    private ?string $privacy = null;
    private ?string $permission = null;
    private ?string $members_url = null;
    private ?string $repositories_url = null;
    private array $parent = array();
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function slug() : ?string
    {
        return $this->slug;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function privacy() : ?string
    {
        return $this->privacy;
    }
    public function permission() : ?string
    {
        return $this->permission;
    }
    public function members_url() : ?string
    {
        return $this->members_url;
    }
    public function repositories_url() : ?string
    {
        return $this->repositories_url;
    }
    public function parent() : array
    {
        return $this->parent;
    }
}
