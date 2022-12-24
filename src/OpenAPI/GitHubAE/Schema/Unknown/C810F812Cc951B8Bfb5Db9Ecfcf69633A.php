<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C810F812Cc951B8Bfb5Db9Ecfcf69633A
{
    public const SCHEMA_JSON = '{"title":"Webhook","required":["id","type","name","active","events","config","created_at","updated_at"],"type":"object","properties":{"active":{"type":"boolean","description":"Determines whether the hook is actually triggered for the events it subscribes to."},"app_id":{"type":"integer","description":"Only included for GitHub Apps. When you register a new GitHub App, GitHub sends a ping event to the webhook URL you specified during registration. The GitHub App ID sent in this field is required for authenticating an app."},"config":{"type":"object","properties":{"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/github-ae@latest\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]}}},"created_at":{"type":"string","format":"date-time"},"deliveries_url":{"type":"string","format":"uri"},"events":{"type":"array","items":{"type":"string"},"description":"Determines what events the hook is triggered for. Default: [\'push\']."},"id":{"type":"integer","description":"Unique identifier of the webhook."},"last_response":{"title":"Hook Response","required":["code","status","message"],"type":"object","properties":{"code":{"type":["integer","null"]},"status":{"type":["string","null"]},"message":{"type":["string","null"]}}},"name":{"enum":["web"],"type":"string","description":"The type of webhook. The only valid value is \'web\'."},"ping_url":{"type":"string","format":"uri"},"test_url":{"type":"string","format":"uri"},"type":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}},"description":"The webhook that is being pinged"}';
    public const SCHEMA_TITLE = 'Webhook';
    public const SCHEMA_DESCRIPTION = 'The webhook that is being pinged';
    /**
     * Determines whether the hook is actually triggered for the events it subscribes to.
     */
    private bool $active;
    /**
     * Only included for GitHub Apps. When you register a new GitHub App, GitHub sends a ping event to the webhook URL you specified during registration. The GitHub App ID sent in this field is required for authenticating an app.
     */
    private ?int $app_id = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C725D13E37E8Da6C4E6543B480A0C0F96::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C725D13E37E8Da6C4E6543B480A0C0F96 $config;
    private string $created_at;
    private ?string $deliveries_url = null;
    /**
     * Determines what events the hook is triggered for. Default: ['push'].
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $events = array();
    /**
     * Unique identifier of the webhook.
     */
    private int $id;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\HookResponse::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\HookResponse $last_response = null;
    /**
     * The type of webhook. The only valid value is 'web'.
     */
    private string $name;
    private ?string $ping_url = null;
    private ?string $test_url = null;
    private string $type;
    private string $updated_at;
    private ?string $url = null;
    /**
     * Determines whether the hook is actually triggered for the events it subscribes to.
     */
    public function active() : bool
    {
        return $this->active;
    }
    /**
     * Only included for GitHub Apps. When you register a new GitHub App, GitHub sends a ping event to the webhook URL you specified during registration. The GitHub App ID sent in this field is required for authenticating an app.
     */
    public function app_id() : ?int
    {
        return $this->app_id;
    }
    public function config() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C725D13E37E8Da6C4E6543B480A0C0F96
    {
        return $this->config;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function deliveries_url() : ?string
    {
        return $this->deliveries_url;
    }
    /**
     * Determines what events the hook is triggered for. Default: ['push'].
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function events() : array
    {
        return $this->events;
    }
    /**
     * Unique identifier of the webhook.
     */
    public function id() : int
    {
        return $this->id;
    }
    public function last_response() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\HookResponse
    {
        return $this->last_response;
    }
    /**
     * The type of webhook. The only valid value is 'web'.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function ping_url() : ?string
    {
        return $this->ping_url;
    }
    public function test_url() : ?string
    {
        return $this->test_url;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function url() : ?string
    {
        return $this->url;
    }
}
