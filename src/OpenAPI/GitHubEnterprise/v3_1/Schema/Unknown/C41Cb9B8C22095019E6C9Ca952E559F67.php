<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C41Cb9B8C22095019E6C9Ca952E559F67
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"config":{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered."},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`."},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/webhooks\\/event-payloads\\/#delivery-headers) header."},"insecure_ssl":{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**"}},"description":"Key\\/value pairs to provide settings for this webhook."},"events":{"type":"array","items":{"type":"string"},"description":"The [events](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/webhooks\\/event-payloads) that trigger this webhook. A global webhook can be triggered by `user` and `organization` events. Default: `user` and `organization`."},"active":{"type":"boolean","description":"Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.","default":true}}}';
    public const SCHEMA_TITLE = 'c_41cb9b8c22095019e6c9ca952e559f67';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Key/value pairs to provide settings for this webhook.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C41Cb9B8C22095019E6C9Ca952E559F67\Config::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C41Cb9B8C22095019E6C9Ca952E559F67\Config $config;
    /**
     * The [events](https://docs.github.com/enterprise-server@3.1/webhooks/event-payloads) that trigger this webhook. A global webhook can be triggered by `user` and `organization` events. Default: `user` and `organization`.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C41Cb9B8C22095019E6C9Ca952E559F67\Events>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C41Cb9B8C22095019E6C9Ca952E559F67\Events::class)
     */
    private array $events = array();
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    private bool $active;
    /**
     * Key/value pairs to provide settings for this webhook.
     */
    public function config() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C41Cb9B8C22095019E6C9Ca952E559F67\Config
    {
        return $this->config;
    }
    /**
     * The [events](https://docs.github.com/enterprise-server@3.1/webhooks/event-payloads) that trigger this webhook. A global webhook can be triggered by `user` and `organization` events. Default: `user` and `organization`.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C41Cb9B8C22095019E6C9Ca952E559F67\Events>
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
