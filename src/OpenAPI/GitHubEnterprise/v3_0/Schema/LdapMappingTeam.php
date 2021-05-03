<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class LdapMappingTeam
{
    public const SCHEMA_TITLE = 'ldap-mapping-team';
    public const SPL_HASH = '0000000008b92dd700000000412ebbda';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $ldap_dn = null;
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $url = null;
    private ?string $html_url = null;
    private ?string $name = null;
    private ?string $slug = null;
    private ?string $description = null;
    private ?string $privacy = null;
    private ?string $permission = null;
    private ?string $members_url = null;
    private ?string $repositories_url = null;
    private $parent;
    public function ldap_dn() : ?string
    {
        return $this->ldap_dn;
    }
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
    public function html_url() : ?string
    {
        return $this->html_url;
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
    public function parent()
    {
        return $this->parent;
    }
}
