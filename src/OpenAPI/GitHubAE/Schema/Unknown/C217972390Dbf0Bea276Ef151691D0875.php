<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C217972390Dbf0Bea276Ef151691D0875
{
    public const SCHEMA_JSON = '{"required":["name","config"],"type":"object","properties":{"name":{"type":"string","description":"Must be passed as \\"web\\"."},"config":{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered."},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`."},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https:\\/\\/docs.github.com\\/github-ae@latest\\/webhooks\\/event-payloads\\/#delivery-headers) header."},"insecure_ssl":{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**"}},"description":"Key\\/value pairs to provide settings for this webhook."},"events":{"type":"array","items":{"type":"string"},"description":"The [events](https:\\/\\/docs.github.com\\/github-ae@latest\\/webhooks\\/event-payloads) that trigger this webhook. A global webhook can be triggered by `user` and `organization` events. Default: `user` and `organization`."},"active":{"type":"boolean","description":"Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.","default":true}}}';
    public const SCHEMA_TITLE = 'c_217972390dbf0bea276ef151691d0875';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Must be passed as "web".
     */
    private string $name;
    /**
     * Key/value pairs to provide settings for this webhook.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C217972390Dbf0Bea276Ef151691D0875\Config::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C217972390Dbf0Bea276Ef151691D0875\Config $config;
    /**
     * The [events](https://docs.github.com/github-ae@latest/webhooks/event-payloads) that trigger this webhook. A global webhook can be triggered by `user` and `organization` events. Default: `user` and `organization`.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C217972390Dbf0Bea276Ef151691D0875\Events>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C217972390Dbf0Bea276Ef151691D0875\Events::class)
     */
    private array $events = array();
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    private ?bool $active = null;
    /**
     * Must be passed as "web".
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Key/value pairs to provide settings for this webhook.
     */
    public function config() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C217972390Dbf0Bea276Ef151691D0875\Config
    {
        return $this->config;
    }
    /**
     * The [events](https://docs.github.com/github-ae@latest/webhooks/event-payloads) that trigger this webhook. A global webhook can be triggered by `user` and `organization` events. Default: `user` and `organization`.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C217972390Dbf0Bea276Ef151691D0875\Events>
     */
    public function events() : array
    {
        return $this->events;
    }
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    public function active() : ?bool
    {
        return $this->active;
    }
}
