<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Team
{
    public const SCHEMA_TITLE = 'Team';
    public const SPL_HASH = '000000002eab65aa00000000697c5254';
    public const SCHEMA_DESCRIPTION = 'Groups of organization members that gives permissions on specified repositories.';
    private int $id;
    private string $node_id;
    private string $name;
    private string $slug;
    private string $description;
    private string $privacy;
    private string $permission;
    private string $url;
    private string $html_url;
    private string $members_url;
    private string $repositories_url;
    private $parent;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function slug() : string
    {
        return $this->slug;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function privacy() : string
    {
        return $this->privacy;
    }
    public function permission() : string
    {
        return $this->permission;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function members_url() : string
    {
        return $this->members_url;
    }
    public function repositories_url() : string
    {
        return $this->repositories_url;
    }
    public function parent()
    {
        return $this->parent;
    }
}
