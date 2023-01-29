<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Hook
{
    public const SCHEMA_JSON = '{"title":"Webhook","required":["id","url","type","name","active","events","config","ping_url","created_at","updated_at","last_response","test_url"],"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer","description":"Unique identifier of the webhook.","examples":[42]},"name":{"type":"string","description":"The name of a valid service, use \'web\' for a webhook.","examples":["web"]},"active":{"type":"boolean","description":"Determines whether the hook is actually triggered on pushes.","examples":[true]},"events":{"type":"array","items":{"type":"string"},"description":"Determines what events the hook is triggered for. Default: [\'push\'].","examples":["push","pull_request"]},"config":{"type":"object","properties":{"email":{"type":"string","examples":["\\"foo@bar.com\\""]},"password":{"type":"string","examples":["\\"foo\\""]},"room":{"type":"string","examples":["\\"roomer\\""]},"subdomain":{"type":"string","examples":["\\"foo\\""]},"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"digest":{"type":"string","examples":["\\"sha256\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"token":{"type":"string","examples":["\\"abc\\""]}}},"updated_at":{"type":"string","format":"date-time","examples":["2011-09-06T20:39:23Z"]},"created_at":{"type":"string","format":"date-time","examples":["2011-09-06T17:26:27Z"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1"]},"test_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/test"]},"ping_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/pings"]},"deliveries_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/deliveries"]},"last_response":{"title":"Hook Response","required":["code","status","message"],"type":"object","properties":{"code":{"type":["integer","null"]},"status":{"type":["string","null"]},"message":{"type":["string","null"]}}}},"description":"Webhooks for repositories."}';
    public const SCHEMA_TITLE = 'Webhook';
    public const SCHEMA_DESCRIPTION = 'Webhooks for repositories.';
    public readonly string $type;
    /**
     * Unique identifier of the webhook.
     */
    public readonly int $id;
    /**
     * The name of a valid service, use 'web' for a webhook.
     */
    public readonly string $name;
    /**
     * Determines whether the hook is actually triggered on pushes.
     */
    public readonly bool $active;
    /**
     * Determines what events the hook is triggered for. Default: ['push'].
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook\Events>
     */
    public readonly array $events;
    public readonly array $config;
    public readonly string $updated_at;
    public readonly string $created_at;
    public readonly string $url;
    public readonly string $test_url;
    public readonly string $ping_url;
    public readonly ?string $deliveries_url;
    public readonly array $last_response;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook\Events> $events
     */
    public function __construct(string $type, int $id, string $name, bool $active, array $events, array $config, string $updated_at, string $created_at, string $url, string $test_url, string $ping_url, string $deliveries_url, array $last_response)
    {
        $this->type = $type;
        $this->id = $id;
        $this->name = $name;
        $this->active = $active;
        $this->events = $events;
        $this->config = $config;
        $this->updated_at = $updated_at;
        $this->created_at = $created_at;
        $this->url = $url;
        $this->test_url = $test_url;
        $this->ping_url = $ping_url;
        $this->deliveries_url = $deliveries_url;
        $this->last_response = $last_response;
    }
}
