<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Project;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Project;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class Edited
{
    public const SCHEMA_TITLE       = 'project edited event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The changes to the project if the action was `edited`.
     */
    private array $changes = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Project::class) */
    private Project $project;
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private Repository $repository;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $sender;
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private InstallationLite $installation;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private Organization $organization;

    public function action(): string
    {
        return $this->action;
    }

    /**
     * The changes to the project if the action was `edited`.
     */
    public function changes(): array
    {
        return $this->changes;
    }

    public function project(): Project
    {
        return $this->project;
    }

    /**
     * A git repository
     */
    public function repository(): Repository
    {
        return $this->repository;
    }

    public function sender(): User
    {
        return $this->sender;
    }

    /**
     * Installation
     */
    public function installation(): InstallationLite
    {
        return $this->installation;
    }

    public function organization(): Organization
    {
        return $this->organization;
    }
}
