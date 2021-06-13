<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\PullRequest;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\PullRequest;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class Opened
{
    public const SCHEMA_TITLE       = 'pull_request opened event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The pull request number.
     */
    private int $number;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\PullRequest::class) */
    private PullRequest $pull_request;
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private Repository $repository;
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private InstallationLite $installation;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private Organization $organization;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $sender;

    public function action(): string
    {
        return $this->action;
    }

    /**
     * The pull request number.
     */
    public function number(): int
    {
        return $this->number;
    }

    public function pull_request(): PullRequest
    {
        return $this->pull_request;
    }

    /**
     * A git repository
     */
    public function repository(): Repository
    {
        return $this->repository;
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

    public function sender(): User
    {
        return $this->sender;
    }
}
