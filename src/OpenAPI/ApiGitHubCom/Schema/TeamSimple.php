<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TeamSimple
{
    public const SCHEMA_JSON = '{"title":"Team Simple","required":["id","node_id","url","members_url","name","description","permission","html_url","repositories_url","slug"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the team","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VGVhbTE="]},"url":{"type":"string","description":"URL for the team","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1"]},"members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}"]},"name":{"type":"string","description":"Name of the team","examples":["Justice League"]},"description":{"type":["string","null"],"description":"Description of the team","examples":["A great team."]},"permission":{"type":"string","description":"Permission that the team will have for its repositories","examples":["admin"]},"privacy":{"type":"string","description":"The level of privacy this team should have","examples":["closed"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"]},"repositories_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos"]},"slug":{"type":"string","examples":["justice-league"]},"ldap_dn":{"type":"string","description":"Distinguished Name (DN) that team maps to within LDAP environment","examples":["uid=example,ou=users,dc=github,dc=com"]}},"description":"Groups of organization members that gives permissions on specified repositories."}';
    public const SCHEMA_EXAMPLE = '{"id":1,"node_id":"MDQ6VGVhbTE=","url":"https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1","members_url":"https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}","name":"Justice League","description":"A great team.","permission":"admin","privacy":"closed","html_url":"https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core","repositories_url":"https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos","slug":"justice-league","ldap_dn":"uid=example,ou=users,dc=github,dc=com"}';
    public const SCHEMA_TITLE = 'Team Simple';
    public const SCHEMA_DESCRIPTION = 'Groups of organization members that gives permissions on specified repositories.';
    /**
     * Unique identifier of the team
     */
    public readonly int $id;
    public readonly string $node_id;
    /**
     * URL for the team
     */
    public readonly string $url;
    public readonly string $members_url;
    /**
     * Name of the team
     */
    public readonly string $name;
    /**
     * Description of the team
     */
    public readonly ?string $description;
    /**
     * Permission that the team will have for its repositories
     */
    public readonly string $permission;
    /**
     * The level of privacy this team should have
     */
    public readonly ?string $privacy;
    public readonly string $html_url;
    public readonly string $repositories_url;
    public readonly string $slug;
    /**
     * Distinguished Name (DN) that team maps to within LDAP environment
     */
    public readonly ?string $ldap_dn;
    public function __construct(int $id, string $node_id, string $url, string $members_url, string $name, string $description, string $permission, string $privacy, string $html_url, string $repositories_url, string $slug, string $ldap_dn)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->members_url = $members_url;
        $this->name = $name;
        $this->description = $description;
        $this->permission = $permission;
        $this->privacy = $privacy;
        $this->html_url = $html_url;
        $this->repositories_url = $repositories_url;
        $this->slug = $slug;
        $this->ldap_dn = $ldap_dn;
    }
}
