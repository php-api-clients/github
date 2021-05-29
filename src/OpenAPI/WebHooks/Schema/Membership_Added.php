<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Membership_Added
{
    public const SCHEMA_TITLE       = 'membership added event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The scope of the membership. Currently, can only be `team`.
     */
    private ?string $scope = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $member = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $sender = null;
    /**
     * Groups of organization members that gives permissions on specified repositories.
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Team::class)
     */
    private ?Team $team = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private ?Organization $organization = null;
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?InstallationLite $installation = null;

    public function action(): ?string
    {
        return $this->action;
    }

    public function scope(): ?string
    {
        return $this->scope;
    }

    public function member(): ?User
    {
        return $this->member;
    }

    public function sender(): ?User
    {
        return $this->sender;
    }

    public function team(): ?Team
    {
        return $this->team;
    }

    public function organization(): ?Organization
    {
        return $this->organization;
    }

    public function installation(): ?InstallationLite
    {
        return $this->installation;
    }
}
