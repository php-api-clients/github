<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Ping_Event
{
    public const SCHEMA_TITLE = 'ping event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $zen = null;
    /**
     * The ID of the webhook that triggered the ping.
     */
    private ?int $hook_id = null;
    /**
     * The [webhook configuration](https://docs.github.com/en/rest/reference/repos#get-a-repository-webhook).
     */
    private array $hook = array();
    /**
     * A git repository
     */
    private array $repository = array();
    private array $sender = array();
    private array $organization = array();
    public function zen() : ?string
    {
        return $this->zen;
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
    public function organization() : array
    {
        return $this->organization;
    }
}
