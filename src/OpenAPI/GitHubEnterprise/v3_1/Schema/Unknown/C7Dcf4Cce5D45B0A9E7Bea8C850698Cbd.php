<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C7Dcf4Cce5D45B0A9E7Bea8C850698Cbd
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string","description":"Use `web` to create a webhook. Default: `web`. This parameter only accepts the value `web`."},"config":{"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"token":{"type":"string","examples":["\\"abc\\""]},"digest":{"type":"string","examples":["\\"sha256\\""]}},"description":"Key\\/value pairs to provide settings for this webhook. [These are defined below](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/repos#create-hook-config-params)."},"events":{"type":"array","items":{"type":"string"},"description":"Determines what [events](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/webhooks\\/event-payloads) the hook is triggered for.","default":["push"]},"active":{"type":"boolean","description":"Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.","default":true}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'c_7dcf4cce5d45b0a9e7bea8c850698cbd';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Use `web` to create a webhook. Default: `web`. This parameter only accepts the value `web`.
     */
    private string $name;
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/enterprise-server@3.1/rest/reference/repos#create-hook-config-params).
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C7Dcf4Cce5D45B0A9E7Bea8C850698Cbd\Config::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C7Dcf4Cce5D45B0A9E7Bea8C850698Cbd\Config $config;
    /**
     * Determines what [events](https://docs.github.com/enterprise-server@3.1/webhooks/event-payloads) the hook is triggered for.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C7Dcf4Cce5D45B0A9E7Bea8C850698Cbd\Events>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C7Dcf4Cce5D45B0A9E7Bea8C850698Cbd\Events::class)
     */
    private array $events = array();
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    private bool $active;
    /**
     * Use `web` to create a webhook. Default: `web`. This parameter only accepts the value `web`.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/enterprise-server@3.1/rest/reference/repos#create-hook-config-params).
     */
    public function config() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C7Dcf4Cce5D45B0A9E7Bea8C850698Cbd\Config
    {
        return $this->config;
    }
    /**
     * Determines what [events](https://docs.github.com/enterprise-server@3.1/webhooks/event-payloads) the hook is triggered for.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C7Dcf4Cce5D45B0A9E7Bea8C850698Cbd\Events>
     */
    public function events() : array
    {
        return $this->events;
    }
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    public function active() : bool
    {
        return $this->active;
    }
}
