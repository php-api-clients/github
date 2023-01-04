<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrgHook
{
    public const SCHEMA_JSON = '{"title":"Org Hook","required":["id","url","type","name","active","events","config","ping_url","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[1]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1"]},"ping_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/pings"]},"deliveries_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/deliveries"]},"name":{"type":"string","examples":["web"]},"events":{"type":"array","items":{"type":"string"},"examples":["push","pull_request"]},"active":{"type":"boolean","examples":[true]},"config":{"type":"object","properties":{"url":{"type":"string","examples":["\\"http:\\/\\/example.com\\/2\\""]},"insecure_ssl":{"type":"string","examples":["\\"0\\""]},"content_type":{"type":"string","examples":["\\"form\\""]},"secret":{"type":"string","examples":["\\"********\\""]}}},"updated_at":{"type":"string","format":"date-time","examples":["2011-09-06T20:39:23Z"]},"created_at":{"type":"string","format":"date-time","examples":["2011-09-06T17:26:27Z"]},"type":{"type":"string"}},"description":"Org Hook"}';
    public const SCHEMA_TITLE = 'Org Hook';
    public const SCHEMA_DESCRIPTION = 'Org Hook';
    private int $id;
    private string $url;
    private string $ping_url;
    private ?string $deliveries_url = null;
    private string $name;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook\Events>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook\Events::class)
     */
    private array $events = array();
    private bool $active;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook\Config::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook\Config $config;
    private string $updated_at;
    private string $created_at;
    private string $type;
    public function id() : int
    {
        return $this->id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function ping_url() : string
    {
        return $this->ping_url;
    }
    public function deliveries_url() : ?string
    {
        return $this->deliveries_url;
    }
    public function name() : string
    {
        return $this->name;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook\Events>
     */
    public function events() : array
    {
        return $this->events;
    }
    public function active() : bool
    {
        return $this->active;
    }
    public function config() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook\Config
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
    public function type() : string
    {
        return $this->type;
    }
}
