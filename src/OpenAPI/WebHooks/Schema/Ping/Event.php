<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Ping;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class Event
{
    public const SCHEMA_TITLE       = 'ping event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $zen            = null;
    /**
     * The ID of the webhook that triggered the ping.
     */
    private ?int $hook_id = null;
    /**
     * The [webhook configuration](https://docs.github.com/en/rest/reference/repos#get-a-repository-webhook).
     */
    private array $hook = [];
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

    public function zen(): ?string
    {
        return $this->zen;
    }

    /**
     * The ID of the webhook that triggered the ping.
     */
    public function hook_id(): ?int
    {
        return $this->hook_id;
    }

    /**
     * The [webhook configuration](https://docs.github.com/en/rest/reference/repos#get-a-repository-webhook).
     */
    public function hook(): array
    {
        return $this->hook;
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
