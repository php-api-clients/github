<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Status;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Status\Event\Branches;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class Event
{
    public const SCHEMA_TITLE       = 'status event';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The unique identifier of the status.
     */
    private ?int $id = null;
    /**
     * The Commit SHA.
     */
    private ?string $sha  = null;
    private ?string $name = null;
    private $avatar_url;
    /**
     * The optional link added to the status.
     */
    private $target_url;
    private ?string $context = null;
    /**
     * The optional human-readable description added to the status.
     */
    private $description;
    /**
     * The new state. Can be `pending`, `success`, `failure`, or `error`.
     */
    private ?string $state = null;
    private array $commit  = [];
    /**
     * An array of branch objects containing the status' SHA. Each branch contains the given SHA, but the SHA may or may not be the head of the branch. The array includes a maximum of 10 branches.
     */
    private array $branches     = [];
    private ?string $created_at = null;
    private ?string $updated_at = null;
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private ?Repository $repository = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $sender = null;
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?InstallationLite $installation = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private ?Organization $organization = null;

    /**
     * The unique identifier of the status.
     */
    public function id(): ?int
    {
        return $this->id;
    }

    /**
     * The Commit SHA.
     */
    public function sha(): ?string
    {
        return $this->sha;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function avatar_url()
    {
        return $this->avatar_url;
    }

    /**
     * The optional link added to the status.
     */
    public function target_url()
    {
        return $this->target_url;
    }

    public function context(): ?string
    {
        return $this->context;
    }

    /**
     * The optional human-readable description added to the status.
     */
    public function description()
    {
        return $this->description;
    }

    /**
     * The new state. Can be `pending`, `success`, `failure`, or `error`.
     */
    public function state(): ?string
    {
        return $this->state;
    }

    public function commit(): array
    {
        return $this->commit;
    }

    /**
     * An array of branch objects containing the status' SHA. Each branch contains the given SHA, but the SHA may or may not be the head of the branch. The array includes a maximum of 10 branches.
     *
     * @return array<Branches>
     */
    public function branches(): array
    {
        return $this->branches;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
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

    /**
     * Installation
     */
    public function installation(): ?InstallationLite
    {
        return $this->installation;
    }

    public function organization(): ?Organization
    {
        return $this->organization;
    }
}
