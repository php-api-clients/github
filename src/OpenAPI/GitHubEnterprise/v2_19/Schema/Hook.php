<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Hook
{
    public const SCHEMA_TITLE = 'Webhook';
    public const SPL_HASH = '000000005b3e5b0f000000001bb9a56a';
    public const SCHEMA_DESCRIPTION = 'Webhooks for repositories.';
    private ?string $type = null;
    /**
     * Unique identifier of the webhook.
     */
    private ?int $id = null;
    /**
     * The name of a valid service, use 'web' for a webhook.
     */
    private ?string $name = null;
    /**
     * Determines whether the hook is actually triggered on pushes.
     */
    private ?bool $active = null;
    /**
     * Determines what events the hook is triggered for. Default: ['push'].
     */
    private array $events = array();
    private ?object $config = null;
    private ?string $updated_at = null;
    private ?string $created_at = null;
    private ?string $url = null;
    private ?string $test_url = null;
    private ?string $ping_url = null;
    private ?object $last_response = null;
    public function type() : ?string
    {
        return $this->type;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function active() : ?bool
    {
        return $this->active;
    }
    public function events() : array
    {
        return $this->events;
    }
    public function config() : ?object
    {
        return $this->config;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function test_url() : ?string
    {
        return $this->test_url;
    }
    public function ping_url() : ?string
    {
        return $this->ping_url;
    }
    public function last_response() : ?object
    {
        return $this->last_response;
    }
}
