<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TeamSimple
{
    public const SCHEMA_JSON = '{"title":"Team Simple","required":["id","node_id","url","members_url","name","description","permission","html_url","repositories_url","slug"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the team","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VGVhbTE="]},"url":{"type":"string","description":"URL for the team","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1"]},"members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}"]},"name":{"type":"string","description":"Name of the team","examples":["Justice League"]},"description":{"type":["string","null"],"description":"Description of the team","examples":["A great team."]},"permission":{"type":"string","description":"Permission that the team will have for its repositories","examples":["admin"]},"privacy":{"type":"string","description":"The level of privacy this team should have","examples":["closed"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"]},"repositories_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos"]},"slug":{"type":"string","examples":["justice-league"]},"ldap_dn":{"type":"string","description":"Distinguished Name (DN) that team maps to within LDAP environment","examples":["uid=example,ou=users,dc=github,dc=com"]}},"description":"Groups of organization members that gives permissions on specified repositories."}';
    public const SCHEMA_TITLE = 'Team Simple';
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
    private $description;
    /**
     * Permission that the team will have for its repositories
     */
    private string $permission;
    /**
     * The level of privacy this team should have
     */
    private ?string $privacy = null;
    private string $html_url;
    private string $repositories_url;
    private string $slug;
    /**
     * Distinguished Name (DN) that team maps to within LDAP environment
     */
    private ?string $ldap_dn = null;
    /**
     * Unique identifier of the team
     */
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * URL for the team
     */
    public function url() : string
    {
        return $this->url;
    }
    public function members_url() : string
    {
        return $this->members_url;
    }
    /**
     * Name of the team
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Description of the team
     */
    public function description()
    {
        return $this->description;
    }
    /**
     * Permission that the team will have for its repositories
     */
    public function permission() : string
    {
        return $this->permission;
    }
    /**
     * The level of privacy this team should have
     */
    public function privacy() : ?string
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
    /**
     * Distinguished Name (DN) that team maps to within LDAP environment
     */
    public function ldap_dn() : ?string
    {
        return $this->ldap_dn;
    }
}
