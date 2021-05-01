<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class TeamFull
{
    public const SCHEMA_TITLE = 'Full Team';
    public const SCHEMA_DESCRIPTION = 'Groups of organization members that gives permissions on specified repositories.';
    /**Unique identifier of the team**/
    private int $id;
    private string $node_id;
    /**URL for the team**/
    private string $url;
    private string $html_url;
    /**Name of the team**/
    private string $name;
    private string $slug;
    private string $description;
    /**The level of privacy this team should have**/
    private string $privacy;
    /**Permission that the team will have for its repositories**/
    private string $permission;
    private string $members_url;
    private string $repositories_url;
    private $parent;
    private int $members_count;
    private int $repos_count;
    private string $created_at;
    private string $updated_at;
    /**Organization Full**/
    private object $organization;
    /**Distinguished Name (DN) that team maps to within LDAP environment**/
    private string $ldap_dn;
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
    public function html_url() : string
    {
        return $this->html_url;
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
    public function parent()
    {
        return $this->parent;
    }
    public function members_count() : int
    {
        return $this->members_count;
    }
    public function repos_count() : int
    {
        return $this->repos_count;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function organization() : object
    {
        return $this->organization;
    }
    public function ldap_dn() : string
    {
        return $this->ldap_dn;
    }
}
