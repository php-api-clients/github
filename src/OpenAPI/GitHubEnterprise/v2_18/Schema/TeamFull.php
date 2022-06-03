<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class TeamFull
{
    public const SCHEMA_TITLE = 'Full Team';
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
    private string $html_url;
    /**
     * Name of the team
     */
    private string $name;
    private string $slug;
    private ?string $description = null;
    /**
     * The level of privacy this team should have
     */
    private ?string $privacy = null;
    /**
     * Permission that the team will have for its repositories
     */
    private string $permission;
    private string $members_url;
    private string $repositories_url;
    /**
     * Groups of organization members that gives permissions on specified repositories.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableTeamSimple::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableTeamSimple $parent = null;
    private int $members_count;
    private int $repos_count;
    private string $created_at;
    private string $updated_at;
    /**
     * Organization Full
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\OrganizationFull::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\OrganizationFull $organization;
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
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * Name of the team
     */
    public function name() : string
    {
        return $this->name;
    }
    public function slug() : string
    {
        return $this->slug;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    /**
     * The level of privacy this team should have
     */
    public function privacy() : ?string
    {
        return $this->privacy;
    }
    /**
     * Permission that the team will have for its repositories
     */
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
    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    public function parent() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableTeamSimple
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
    /**
     * Organization Full
     */
    public function organization() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\OrganizationFull
    {
        return $this->organization;
    }
    /**
     * Distinguished Name (DN) that team maps to within LDAP environment
     */
    public function ldap_dn() : ?string
    {
        return $this->ldap_dn;
    }
}
