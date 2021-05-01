<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class TeamProject
{
    public const SCHEMA_TITLE = 'Team Project';
    public const SCHEMA_DESCRIPTION = 'A team\'s access to a project.';
    private string $owner_url;
    private string $url;
    private string $html_url;
    private string $columns_url;
    private int $id;
    private string $node_id;
    private string $name;
    private string $body;
    private int $number;
    private string $state;
    /**Simple User**/
    private object $creator;
    private string $created_at;
    private string $updated_at;
    /**The organization permission for this project. Only present when owner is an organization.**/
    private string $organization_permission;
    /**Whether the project is private or not. Only present when owner is an organization.**/
    private boolean $private;
    private object $permissions;
    public function owner_url() : string
    {
        return $this->owner_url;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function columns_url() : string
    {
        return $this->columns_url;
    }
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
    public function body() : string
    {
        return $this->body;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function creator() : object
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
    public function organization_permission() : string
    {
        return $this->organization_permission;
    }
    public function private() : boolean
    {
        return $this->private;
    }
    public function permissions() : object
    {
        return $this->permissions;
    }
}
