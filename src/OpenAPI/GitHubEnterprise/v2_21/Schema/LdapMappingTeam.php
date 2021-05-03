<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class LdapMappingTeam
{
    public const SCHEMA_TITLE = 'ldap-mapping-team';
    public const SPL_HASH = '0000000018145ae1000000005f691719';
    public const SCHEMA_DESCRIPTION = '';
    private string $ldap_dn;
    private int $id;
    private string $node_id;
    private string $url;
    private string $html_url;
    private string $name;
    private string $slug;
    private string $description;
    private string $privacy;
    private string $permission;
    private string $members_url;
    private string $repositories_url;
    private $parent;
    public function ldap_dn() : string
    {
        return $this->ldap_dn;
    }
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
}
