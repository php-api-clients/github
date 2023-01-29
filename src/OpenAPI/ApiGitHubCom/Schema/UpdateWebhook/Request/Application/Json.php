<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateWebhook\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"config":{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"address":{"type":"string","examples":["\\"bar@example.com\\""]},"room":{"type":"string","examples":["\\"The Serious Room\\""]}},"description":"Key\\/value pairs to provide settings for this webhook. [These are defined below](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos#create-hook-config-params)."},"events":{"type":"array","items":{"type":"string"},"description":"Determines what [events](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads) the hook is triggered for. This replaces the entire array of events.","default":["push"]},"add_events":{"type":"array","items":{"type":"string"},"description":"Determines a list of events to be added to the list of events that the Hook triggers for."},"remove_events":{"type":"array","items":{"type":"string"},"description":"Determines a list of events to be removed from the list of events that the Hook triggers for."},"active":{"type":"boolean","description":"Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.","default":true}}}';
    public const SCHEMA_TITLE = 'UpdateWebhook\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/rest/reference/repos#create-hook-config-params).
     */
    public readonly array $config;
    /**
     * Determines what [events](https://docs.github.com/webhooks/event-payloads) the hook is triggered for. This replaces the entire array of events.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Events>
     */
    public readonly array $events;
    /**
     * Determines a list of events to be added to the list of events that the Hook triggers for.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\AddEvents>
     */
    public readonly array $add_events;
    /**
     * Determines a list of events to be removed from the list of events that the Hook triggers for.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\RemoveEvents>
     */
    public readonly array $remove_events;
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    public readonly bool $active;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Events> $events
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\AddEvents> $add_events
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\RemoveEvents> $remove_events
     */
    public function __construct(array $config, array $events, array $add_events, array $remove_events, bool $active)
    {
        $this->config = $config;
        $this->events = $events;
        $this->add_events = $add_events;
        $this->remove_events = $remove_events;
        $this->active = $active;
    }
}
