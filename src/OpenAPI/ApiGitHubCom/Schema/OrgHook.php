<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrgHook
{
    public const SCHEMA_JSON = '{"title":"Org Hook","required":["id","url","type","name","active","events","config","ping_url","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[1]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1"]},"ping_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/pings"]},"deliveries_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/deliveries"]},"name":{"type":"string","examples":["web"]},"events":{"type":"array","items":{"type":"string"},"examples":["push","pull_request"]},"active":{"type":"boolean","examples":[true]},"config":{"type":"object","properties":{"url":{"type":"string","examples":["\\"http:\\/\\/example.com\\/2\\""]},"insecure_ssl":{"type":"string","examples":["\\"0\\""]},"content_type":{"type":"string","examples":["\\"form\\""]},"secret":{"type":"string","examples":["\\"********\\""]}}},"updated_at":{"type":"string","format":"date-time","examples":["2011-09-06T20:39:23Z"]},"created_at":{"type":"string","format":"date-time","examples":["2011-09-06T17:26:27Z"]},"type":{"type":"string"}},"description":"Org Hook"}';
    public const SCHEMA_TITLE = 'Org Hook';
    public const SCHEMA_DESCRIPTION = 'Org Hook';
    public readonly int $id;
    public readonly string $url;
    public readonly string $ping_url;
    public readonly ?string $deliveries_url;
    public readonly string $name;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook\Events>
     */
    public readonly array $events;
    public readonly bool $active;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook\Config $config;
    public readonly string $updated_at;
    public readonly string $created_at;
    public readonly string $type;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook\Events> $events
     */
    public function __construct(int $id, string $url, string $ping_url, string $deliveries_url, string $name, array $events, bool $active, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook\Config $config, string $updated_at, string $created_at, string $type)
    {
        $this->id = $id;
        $this->url = $url;
        $this->ping_url = $ping_url;
        $this->deliveries_url = $deliveries_url;
        $this->name = $name;
        $this->events = $events;
        $this->active = $active;
        $this->config = $config;
        $this->updated_at = $updated_at;
        $this->created_at = $created_at;
        $this->type = $type;
    }
}
