<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class OrgMembership
{
    public const SCHEMA_TITLE = 'Org Membership';
    public const SPL_HASH = '000000005b3e5c0c000000001bb9a56a';
    public const SCHEMA_DESCRIPTION = 'Org Membership';
    private ?string $url = null;
    /**
     * The state of the member in the organization. The `pending` state indicates the user has not yet accepted an invitation.
     */
    private ?string $state = null;
    /**
     * The user's membership type in the organization.
     */
    private ?string $role = null;
    private ?string $organization_url = null;
    /**
     * Organization Simple
     */
    private ?object $organization = null;
    private $user;
    private ?object $permissions = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function state() : ?string
    {
        return $this->state;
    }
    public function role() : ?string
    {
        return $this->role;
    }
    public function organization_url() : ?string
    {
        return $this->organization_url;
    }
    public function organization() : ?object
    {
        return $this->organization;
    }
    public function user()
    {
        return $this->user;
    }
    public function permissions() : ?object
    {
        return $this->permissions;
    }
}
