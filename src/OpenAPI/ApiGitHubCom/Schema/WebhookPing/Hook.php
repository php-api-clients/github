<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPing;

final class Hook
{
    public const SCHEMA_JSON = '{"title":"Webhook","required":["id","type","name","active","events","config","created_at","updated_at"],"type":"object","properties":{"active":{"type":"boolean","description":"Determines whether the hook is actually triggered for the events it subscribes to."},"app_id":{"type":"integer","description":"Only included for GitHub Apps. When you register a new GitHub App, GitHub sends a ping event to the webhook URL you specified during registration. The GitHub App ID sent in this field is required for authenticating an app."},"config":{"type":"object","properties":{"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]}}},"created_at":{"type":"string","format":"date-time"},"deliveries_url":{"type":"string","format":"uri"},"events":{"type":"array","items":{"type":"string"},"description":"Determines what events the hook is triggered for. Default: [\'push\']."},"id":{"type":"integer","description":"Unique identifier of the webhook."},"last_response":{"title":"Hook Response","required":["code","status","message"],"type":"object","properties":{"code":{"type":["integer","null"]},"status":{"type":["string","null"]},"message":{"type":["string","null"]}}},"name":{"enum":["web"],"type":"string","description":"The type of webhook. The only valid value is \'web\'."},"ping_url":{"type":"string","format":"uri"},"test_url":{"type":"string","format":"uri"},"type":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}},"description":"The webhook that is being pinged"}';
    public const SCHEMA_TITLE = 'Webhook';
    public const SCHEMA_DESCRIPTION = 'The webhook that is being pinged';
    /**
     * Determines whether the hook is actually triggered for the events it subscribes to.
     */
    public readonly bool $active;
    /**
     * Only included for GitHub Apps. When you register a new GitHub App, GitHub sends a ping event to the webhook URL you specified during registration. The GitHub App ID sent in this field is required for authenticating an app.
     */
    public readonly ?int $app_id;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook\Config $config;
    public readonly string $created_at;
    public readonly ?string $deliveries_url;
    /**
     * Determines what events the hook is triggered for. Default: ['push'].
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook\Events>
     */
    public readonly array $events;
    /**
     * Unique identifier of the webhook.
     */
    public readonly int $id;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookResponse $last_response;
    /**
     * The type of webhook. The only valid value is 'web'.
     */
    public readonly string $name;
    public readonly ?string $ping_url;
    public readonly ?string $test_url;
    public readonly string $type;
    public readonly string $updated_at;
    public readonly ?string $url;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hook\Events> $events
     */
    public function __construct(bool $active, int $app_id, object $config, string $created_at, string $deliveries_url, array $events, int $id, object $last_response, string $name, string $ping_url, string $test_url, string $type, string $updated_at, string $url)
    {
        $this->active = $active;
        $this->app_id = $app_id;
        $this->config = $config;
        $this->created_at = $created_at;
        $this->deliveries_url = $deliveries_url;
        $this->events = $events;
        $this->id = $id;
        $this->last_response = $last_response;
        $this->name = $name;
        $this->ping_url = $ping_url;
        $this->test_url = $test_url;
        $this->type = $type;
        $this->updated_at = $updated_at;
        $this->url = $url;
    }
}
