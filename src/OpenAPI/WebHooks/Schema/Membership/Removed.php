<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Membership;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Team;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class Removed
{
    public const SCHEMA_TITLE       = 'membership removed event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The scope of the membership. Currently, can only be `team`.
     */
    private string $scope;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $member;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $sender;
    /**
     * Groups of organization members that gives permissions on specified repositories.
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Team::class)
     */
    private Team $team;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private Organization $organization;
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private InstallationLite $installation;

    public function action(): string
    {
        return $this->action;
    }

    /**
     * The scope of the membership. Currently, can only be `team`.
     */
    public function scope(): string
    {
        return $this->scope;
    }

    public function member(): User
    {
        return $this->member;
    }

    public function sender(): User
    {
        return $this->sender;
    }

    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    public function team(): Team
    {
        return $this->team;
    }

    public function organization(): Organization
    {
        return $this->organization;
    }

    /**
     * Installation
     */
    public function installation(): InstallationLite
    {
        return $this->installation;
    }
}
