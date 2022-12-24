<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class LdapMappingTeam
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"ldap_dn":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"name":{"type":"string"},"slug":{"type":"string"},"description":{"type":["string","null"]},"privacy":{"type":"string"},"permission":{"type":"string"},"members_url":{"type":"string"},"repositories_url":{"type":"string"},"parent":{"type":["null"]}}}';
    public const SCHEMA_TITLE = 'ldap-mapping-team';
    public const SCHEMA_DESCRIPTION = '';
    private string $ldap_dn;
    private int $id;
    private string $node_id;
    private string $url;
    private string $html_url;
    private string $name;
    private string $slug;
    private $description;
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
    public function description()
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
