<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class MetaEvent
{
    public const SCHEMA_TITLE = 'meta_event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The id of the modified webhook.
     */
    private int $hook_id;
    /**
     * The modified webhook. This will contain different keys based on the type of webhook it is: repository, organization, business, app, or GitHub Marketplace.
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
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The id of the modified webhook.
     */
    public function hook_id() : int
    {
        return $this->hook_id;
    }
    /**
     * The modified webhook. This will contain different keys based on the type of webhook it is: repository, organization, business, app, or GitHub Marketplace.
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
}
