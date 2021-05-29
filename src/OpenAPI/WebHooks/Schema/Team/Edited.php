<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Team;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Team;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class Edited
{
    public const SCHEMA_TITLE       = 'team edited event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The changes to the team if the action was `edited`.
     */
    private array $changes = [];
    /**
     * Groups of organization members that gives permissions on specified repositories.
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Team::class)
     */
    private ?Team $team = null;
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private ?Repository $repository = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $sender = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private ?Organization $organization = null;

    public function action(): ?string
    {
        return $this->action;
    }

    /**
     * The changes to the team if the action was `edited`.
     */
    public function changes(): array
    {
        return $this->changes;
    }

    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    public function team(): ?Team
    {
        return $this->team;
    }

    /**
     * A git repository
     */
    public function repository(): ?Repository
    {
        return $this->repository;
    }

    public function sender(): ?User
    {
        return $this->sender;
    }

    public function organization(): ?Organization
    {
        return $this->organization;
    }
}
