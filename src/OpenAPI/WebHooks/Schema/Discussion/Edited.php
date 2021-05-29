<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Discussion;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Discussion;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class Edited
{
    public const SCHEMA_TITLE       = 'discussion edited event';
    public const SCHEMA_DESCRIPTION = '';
    private array $changes          = [];
    private string $action;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Discussion::class) */
    private Discussion $discussion = [];
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private Repository $repository = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $sender = [];
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private InstallationLite $installation = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private Organization $organization = [];

    public function changes(): array
    {
        return $this->changes;
    }

    public function action(): string
    {
        return $this->action;
    }

    public function discussion(): Discussion
    {
        return $this->discussion;
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