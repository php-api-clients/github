<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook\Config;

final readonly class OrgHook
{
    public const SCHEMA_JSON        = '{"title":"Org Hook","required":["id","url","type","name","active","events","config","ping_url","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[1]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1"]},"ping_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/pings"]},"deliveries_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/deliveries"]},"name":{"type":"string","examples":["web"]},"events":{"type":"array","items":{"type":"string"},"examples":["push","pull_request"]},"active":{"type":"boolean","examples":[true]},"config":{"type":"object","properties":{"url":{"type":"string","examples":["\\"http:\\/\\/example.com\\/2\\""]},"insecure_ssl":{"type":"string","examples":["\\"0\\""]},"content_type":{"type":"string","examples":["\\"form\\""]},"secret":{"type":"string","examples":["\\"********\\""]}}},"updated_at":{"type":"string","format":"date-time","examples":["2011-09-06T20:39:23Z"]},"created_at":{"type":"string","format":"date-time","examples":["2011-09-06T17:26:27Z"]},"type":{"type":"string"}},"description":"Org Hook"}';
    public const SCHEMA_TITLE       = 'Org Hook';
    public const SCHEMA_DESCRIPTION = 'Org Hook';
    public ?int $id;
    public ?string $url;
    public ?string $ping_url;
    public string $deliveries_url;
    public ?string $name;
    public ?array $events;
    public ?bool $active;
    public ?Config $config;
    public ?string $updated_at;
    public ?string $created_at;
    public ?string $type;

    public function __construct(int $id, string $url, string $ping_url, string $deliveries_url, string $name, array $events, bool $active, Config $config, string $updated_at, string $created_at, string $type)
    {
        $this->id             = $id;
        $this->url            = $url;
        $this->ping_url       = $ping_url;
        $this->deliveries_url = $deliveries_url;
        $this->name           = $name;
        $this->events         = $events;
        $this->active         = $active;
        $this->config         = $config;
        $this->updated_at     = $updated_at;
        $this->created_at     = $created_at;
        $this->type           = $type;
    }
}
