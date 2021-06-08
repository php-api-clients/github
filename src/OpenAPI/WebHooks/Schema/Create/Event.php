<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Create;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class Event
{
    public const SCHEMA_TITLE       = 'create event';
    public const SCHEMA_DESCRIPTION = 'A Git branch or tag is created.';
    /**
     * The [`git ref`](https://docs.github.com/en/rest/reference/git#get-a-reference) resource.
     */
    private string $ref;
    /**
     * The type of Git ref object created in the repository. Can be either `branch` or `tag`.
     */
    private string $ref_type;
    /**
     * The name of the repository's default branch (usually `main`).
     */
    private string $master_branch;
    /**
     * The repository's current description.
     */
    private $description;
    /**
     * The pusher type for the event. Can be either `user` or a deploy key.
     */
    private string $pusher_type;
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

    /**
     * The [`git ref`](https://docs.github.com/en/rest/reference/git#get-a-reference) resource.
     */
    public function ref(): string
    {
        return $this->ref;
    }

    /**
     * The type of Git ref object created in the repository. Can be either `branch` or `tag`.
     */
    public function ref_type(): string
    {
        return $this->ref_type;
    }

    /**
     * The name of the repository's default branch (usually `main`).
     */
    public function master_branch(): string
    {
        return $this->master_branch;
    }

    /**
     * The repository's current description.
     */
    public function description()
    {
        return $this->description;
    }

    /**
     * The pusher type for the event. Can be either `user` or a deploy key.
     */
    public function pusher_type(): string
    {
        return $this->pusher_type;
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
