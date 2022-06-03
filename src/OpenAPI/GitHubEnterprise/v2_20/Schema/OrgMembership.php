<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class OrgMembership
{
    public const SCHEMA_TITLE = 'Org Membership';
    public const SCHEMA_DESCRIPTION = 'Org Membership';
    private string $url;
    /**
     * The state of the member in the organization. The `pending` state indicates the user has not yet accepted an invitation.
     */
    private string $state;
    /**
     * The user's membership type in the organization.
     */
    private string $role;
    private string $organization_url;
    /**
     * Organization Simple
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\OrganizationSimple::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\OrganizationSimple $organization;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\NullableSimpleUser $user = null;
    private array $permissions = array();
    public function url() : string
    {
        return $this->url;
    }
    /**
     * The state of the member in the organization. The `pending` state indicates the user has not yet accepted an invitation.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * The user's membership type in the organization.
     */
    public function role() : string
    {
        return $this->role;
    }
    public function organization_url() : string
    {
        return $this->organization_url;
    }
    /**
     * Organization Simple
     */
    public function organization() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\OrganizationSimple
    {
        return $this->organization;
    }
    /**
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\NullableSimpleUser
    {
        return $this->user;
    }
    public function permissions() : array
    {
        return $this->permissions;
    }
}
