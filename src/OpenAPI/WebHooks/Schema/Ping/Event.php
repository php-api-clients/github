<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Ping;

final class Event
{
    public const SCHEMA_TITLE = 'ping event';
    public const SCHEMA_DESCRIPTION = '';
    private string $zen;
    /**
     * The ID of the webhook that triggered the ping.
     */
    private int $hook_id;
    /**
     * The [webhook configuration](https://docs.github.com/en/rest/reference/repos#get-a-repository-webhook).
     */
    private array $hook = array();
    /**
     * A git repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository $repository;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization $organization;
    public function zen() : string
    {
        return $this->zen;
    }
    /**
     * The ID of the webhook that triggered the ping.
     */
    public function hook_id() : int
    {
        return $this->hook_id;
    }
    /**
     * The [webhook configuration](https://docs.github.com/en/rest/reference/repos#get-a-repository-webhook).
     */
    public function hook() : array
    {
        return $this->hook;
    }
    /**
     * A git repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository
    {
        return $this->repository;
    }
    public function sender() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->sender;
    }
    public function organization() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization
    {
        return $this->organization;
    }
}
