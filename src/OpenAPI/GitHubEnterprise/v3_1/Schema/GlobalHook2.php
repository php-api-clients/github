<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class GlobalHook2
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"active":{"type":"boolean"},"events":{"type":"array","items":{"type":"string"}},"config":{"type":"object","properties":{"url":{"type":"string"},"content_type":{"type":"string"},"insecure_ssl":{"type":"string"}}},"updated_at":{"type":"string"},"created_at":{"type":"string"},"url":{"type":"string"},"ping_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'global-hook-2';
    public const SCHEMA_DESCRIPTION = '';
    private string $type;
    private int $id;
    private string $name;
    private bool $active;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GlobalHook2\Events>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GlobalHook2\Events::class)
     */
    private array $events = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GlobalHook2\Config::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GlobalHook2\Config $config;
    private string $updated_at;
    private string $created_at;
    private string $url;
    private string $ping_url;
    public function type() : string
    {
        return $this->type;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function active() : bool
    {
        return $this->active;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GlobalHook2\Events>
     */
    public function events() : array
    {
        return $this->events;
    }
    public function config() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GlobalHook2\Config
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
    public function ping_url() : string
    {
        return $this->ping_url;
    }
}
