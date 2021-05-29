<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrgMembership
{
    public const SCHEMA_TITLE       = 'Org Membership';
    public const SCHEMA_DESCRIPTION = 'Org Membership';
    private ?string $url            = null;
    /**
     * The state of the member in the organization. The `pending` state indicates the user has not yet accepted an invitation.
     */
    private ?string $state = null;
    /**
     * The user's membership type in the organization.
     */
    private ?string $role             = null;
    private ?string $organization_url = null;
    /**
     * Organization Simple
     */
    private array $organization = [];
    private $user;
    private array $permissions = [];

    public function url(): ?string
    {
        return $this->url;
    }

    public function state(): ?string
    {
        return $this->state;
    }

    public function role(): ?string
    {
        return $this->role;
    }

    public function organization_url(): ?string
    {
        return $this->organization_url;
    }

    public function organization(): array
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
