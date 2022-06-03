<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class Hook
{
    public const SCHEMA_TITLE = 'Webhook';
    public const SCHEMA_DESCRIPTION = 'Webhooks for repositories.';
    private string $type;
    /**
     * Unique identifier of the webhook.
     */
    private int $id;
    /**
     * The name of a valid service, use 'web' for a webhook.
     */
    private string $name;
    /**
     * Determines whether the hook is actually triggered on pushes.
     */
    private bool $active;
    /**
     * Determines what events the hook is triggered for. Default: ['push'].
     */
    private array $events = array();
    private array $config = array();
    private string $updated_at;
    private string $created_at;
    private string $url;
    private string $test_url;
    private string $ping_url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\HookResponse::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\HookResponse $last_response;
    public function type() : string
    {
        return $this->type;
    }
    /**
     * Unique identifier of the webhook.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The name of a valid service, use 'web' for a webhook.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Determines whether the hook is actually triggered on pushes.
     */
    public function active() : bool
    {
        return $this->active;
    }
    /**
     * Determines what events the hook is triggered for. Default: ['push'].
     */
    public function events() : array
    {
        return $this->events;
    }
    public function config() : array
    {
        return $this->config;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function test_url() : string
    {
        return $this->test_url;
    }
    public function ping_url() : string
    {
        return $this->ping_url;
    }
    public function last_response() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\HookResponse
    {
        return $this->last_response;
    }
}
