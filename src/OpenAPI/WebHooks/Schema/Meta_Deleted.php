<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Meta_Deleted
{
    public const SCHEMA_TITLE = 'meta deleted event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The id of the modified webhook.
     */
    private ?int $hook_id = null;
    /**
     * The modified webhook. This will contain different keys based on the type of webhook it is: repository, organization, business, app, or GitHub Marketplace.
     */
    private array $hook = array();
    /**
     * A git repository
     */
    private array $repository = array();
    private array $sender = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function hook_id() : ?int
    {
        return $this->hook_id;
    }
    public function hook() : array
    {
        return $this->hook;
    }
    public function repository() : array
    {
        return $this->repository;
    }
    public function sender() : array
    {
        return $this->sender;
    }
}
