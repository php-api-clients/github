<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class TeamSimple
{
    public const SCHEMA_TITLE = 'Team Simple';
    public const SPL_HASH = '000000006312f8600000000044ad25fc';
    public const SCHEMA_DESCRIPTION = 'Groups of organization members that gives permissions on specified repositories.';
    /**
     * Unique identifier of the team
     */
    private int $id;
    private string $node_id;
    /**
     * URL for the team
     */
    private string $url;
    private string $members_url;
    /**
     * Name of the team
     */
    private string $name;
    /**
     * Description of the team
     */
    private string $description;
    /**
     * Permission that the team will have for its repositories
     */
    private string $permission;
    /**
     * The level of privacy this team should have
     */
    private string $privacy;
    private string $html_url;
    private string $repositories_url;
    private string $slug;
    /**
     * Distinguished Name (DN) that team maps to within LDAP environment
     */
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
    public function members_url() : string
    {
        return $this->members_url;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function permission() : string
    {
        return $this->permission;
    }
    public function privacy() : string
    {
        return $this->privacy;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function repositories_url() : string
    {
        return $this->repositories_url;
    }
    public function slug() : string
    {
        return $this->slug;
    }
    public function ldap_dn() : string
    {
        return $this->ldap_dn;
    }
}
