<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Team
{
    public const SCHEMA_JSON = '{"title":"Team","required":["id","node_id","url","members_url","name","description","permission","html_url","repositories_url","slug","parent"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"slug":{"type":"string"},"description":{"type":["string","null"]},"privacy":{"type":"string"},"permission":{"type":"string"},"permissions":{"required":["pull","triage","push","maintain","admin"],"type":"object","properties":{"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"},"admin":{"type":"boolean"}}},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"]},"members_url":{"type":"string"},"repositories_url":{"type":"string","format":"uri"},"parent":{"anyOf":[{"type":"null"},{"title":"Team Simple","required":["id","node_id","url","members_url","name","description","permission","html_url","repositories_url","slug"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the team","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VGVhbTE="]},"url":{"type":"string","description":"URL for the team","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1"]},"members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}"]},"name":{"type":"string","description":"Name of the team","examples":["Justice League"]},"description":{"type":["string","null"],"description":"Description of the team","examples":["A great team."]},"permission":{"type":"string","description":"Permission that the team will have for its repositories","examples":["admin"]},"privacy":{"type":"string","description":"The level of privacy this team should have","examples":["closed"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"]},"repositories_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos"]},"slug":{"type":"string","examples":["justice-league"]},"ldap_dn":{"type":"string","description":"Distinguished Name (DN) that team maps to within LDAP environment","examples":["uid=example,ou=users,dc=github,dc=com"]}},"description":"Groups of organization members that gives permissions on specified repositories."}]}},"description":"Groups of organization members that gives permissions on specified repositories."}';
    public const SCHEMA_TITLE = 'Team';
    public const SCHEMA_DESCRIPTION = 'Groups of organization members that gives permissions on specified repositories.';
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $name;
    public readonly string $slug;
    public readonly ?string $description;
    public readonly ?string $privacy;
    public readonly string $permission;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Team\Permissions $permissions;
    public readonly string $url;
    public readonly string $html_url;
    public readonly string $members_url;
    public readonly string $repositories_url;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Team\Parent_ $parent;
    public function __construct(int $id, string $node_id, string $name, string $slug, string $description, string $privacy, string $permission, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Team\Permissions $permissions, string $url, string $html_url, string $members_url, string $repositories_url, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Team\Parent_ $parent)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->name = $name;
        $this->slug = $slug;
        $this->description = $description;
        $this->privacy = $privacy;
        $this->permission = $permission;
        $this->permissions = $permissions;
        $this->url = $url;
        $this->html_url = $html_url;
        $this->members_url = $members_url;
        $this->repositories_url = $repositories_url;
        $this->parent = $parent;
    }
}
