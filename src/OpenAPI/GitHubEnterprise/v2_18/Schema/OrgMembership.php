<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class OrgMembership
{
    public const SCHEMA_TITLE       = 'Org Membership';
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
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\OrganizationSimple::class)
     */
    private OrganizationSimple $organization;
    private $user;
    private array $permissions = [];

    public function url(): string
    {
        return $this->url;
    }

    /**
     * The state of the member in the organization. The `pending` state indicates the user has not yet accepted an invitation.
     */
    public function state(): string
    {
        return $this->state;
    }

    /**
     * The user's membership type in the organization.
     */
    public function role(): string
    {
        return $this->role;
    }

    public function organization_url(): string
    {
        return $this->organization_url;
    }

    /**
     * Organization Simple
     */
    public function organization(): OrganizationSimple
    {
        return $this->organization;
    }

    public function user()
    {
        return $this->user;
    }

    public function permissions(): array
    {
        return $this->permissions;
    }
}
