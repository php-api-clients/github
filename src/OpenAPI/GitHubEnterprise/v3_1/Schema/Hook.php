<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class Hook
{
    public const SCHEMA_JSON = '{"title":"Webhook","required":["id","url","type","name","active","events","config","ping_url","created_at","updated_at","last_response","test_url"],"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer","description":"Unique identifier of the webhook.","examples":[42]},"name":{"type":"string","description":"The name of a valid service, use \'web\' for a webhook.","examples":["web"]},"active":{"type":"boolean","description":"Determines whether the hook is actually triggered on pushes.","examples":[true]},"events":{"type":"array","items":{"type":"string"},"description":"Determines what events the hook is triggered for. Default: [\'push\'].","examples":["push","pull_request"]},"config":{"type":"object","properties":{"email":{"type":"string","examples":["\\"foo@bar.com\\""]},"password":{"type":"string","examples":["\\"foo\\""]},"room":{"type":"string","examples":["\\"roomer\\""]},"subdomain":{"type":"string","examples":["\\"foo\\""]},"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"digest":{"type":"string","examples":["\\"sha256\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"token":{"type":"string","examples":["\\"abc\\""]}}},"updated_at":{"type":"string","format":"date-time","examples":["2011-09-06T20:39:23Z"]},"created_at":{"type":"string","format":"date-time","examples":["2011-09-06T17:26:27Z"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1"]},"test_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/test"]},"ping_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/pings"]},"last_response":{"title":"Hook Response","required":["code","status","message"],"type":"object","properties":{"code":{"type":["integer","null"]},"status":{"type":["string","null"]},"message":{"type":["string","null"]}}}},"description":"Webhooks for repositories."}';
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
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Hook\Events>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Hook\Events::class)
     */
    private array $events = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Hook\Config::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Hook\Config $config;
    private string $updated_at;
    private string $created_at;
    private string $url;
    private string $test_url;
    private string $ping_url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\HookResponse::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\HookResponse $last_response;
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
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Hook\Events>
     */
    public function events() : array
    {
        return $this->events;
    }
    public function config() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Hook\Config
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
    public function last_response() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\HookResponse
    {
        return $this->last_response;
    }
}
