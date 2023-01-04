<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CA41D41C33121445C2738023Fc03E0A65
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"config":{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]}},"description":"Key\\/value pairs to provide settings for this webhook. [These are defined below](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/orgs#update-hook-config-params)."},"events":{"type":"array","items":{"type":"string"},"description":"Determines what [events](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/webhooks\\/event-payloads) the hook is triggered for.","default":["push"]},"active":{"type":"boolean","description":"Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.","default":true},"name":{"type":"string","examples":["\\"web\\""]}}}';
    public const SCHEMA_TITLE = 'c_a41d41c33121445c2738023fc03e0a65';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/enterprise-server@3.1/rest/reference/orgs#update-hook-config-params).
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CA41D41C33121445C2738023Fc03E0A65\Config::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CA41D41C33121445C2738023Fc03E0A65\Config $config;
    /**
     * Determines what [events](https://docs.github.com/enterprise-server@3.1/webhooks/event-payloads) the hook is triggered for.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CA41D41C33121445C2738023Fc03E0A65\Events>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CA41D41C33121445C2738023Fc03E0A65\Events::class)
     */
    private array $events = array();
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    private bool $active;
    private string $name;
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/enterprise-server@3.1/rest/reference/orgs#update-hook-config-params).
     */
    public function config() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CA41D41C33121445C2738023Fc03E0A65\Config
    {
        return $this->config;
    }
    /**
     * Determines what [events](https://docs.github.com/enterprise-server@3.1/webhooks/event-payloads) the hook is triggered for.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CA41D41C33121445C2738023Fc03E0A65\Events>
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
    public function name() : string
    {
        return $this->name;
    }
}
