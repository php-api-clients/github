<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Team2
{
    public const SCHEMA_TITLE = 'team-2';
    public const SPL_HASH = '000000006312824a0000000044ad25fc';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $node_id;
    private string $url;
    private string $name;
    private string $slug;
    private string $description;
    private string $privacy;
    private string $permission;
    private string $members_url;
    private string $repositories_url;
    private object $parent;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function url() : string
    {
        return $this->url;
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
    public function members_url() : string
    {
        return $this->members_url;
    }
    public function repositories_url() : string
    {
        return $this->repositories_url;
    }
    public function parent() : object
    {
        return $this->parent;
    }
}
