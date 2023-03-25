<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\UpdateWebhook\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"config":{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"address":{"type":"string","examples":["\\"bar@example.com\\""]},"room":{"type":"string","examples":["\\"The Serious Room\\""]}},"description":"Key\\/value pairs to provide settings for this webhook. [These are defined below](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos#create-hook-config-params)."},"events":{"type":"array","items":{"type":"string"},"description":"Determines what [events](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads) the hook is triggered for. This replaces the entire array of events.","default":["push"]},"add_events":{"type":"array","items":{"type":"string"},"description":"Determines a list of events to be added to the list of events that the Hook triggers for."},"remove_events":{"type":"array","items":{"type":"string"},"description":"Determines a list of events to be removed from the list of events that the Hook triggers for."},"active":{"type":"boolean","description":"Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.","default":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"config":{"url":"https:\\/\\/example.com\\/webhook","contentType":"\\"json\\"","secret":"\\"********\\"","insecureSsl":"generated_insecure_ssl_null","address":"\\"bar@example.com\\"","room":"\\"The Serious Room\\""},"events":["generated_events_null"],"addEvents":["generated_add_events_null"],"removeEvents":["generated_remove_events_null"],"active":false}';
    /**
     * config: Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/rest/reference/repos#create-hook-config-params).
     * events: Determines what [events](https://docs.github.com/webhooks/event-payloads) the hook is triggered for. This replaces the entire array of events.
     * @param ?array<string> $events
     * addEvents: Determines a list of events to be added to the list of events that the Hook triggers for.
     * @param ?array<string> $addEvents
     * removeEvents: Determines a list of events to be removed from the list of events that the Hook triggers for.
     * @param ?array<string> $removeEvents
     * active: Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    public function __construct(public ?Schema\Repos\UpdateWebhook\Request\Applicationjson\Config $config, public ?array $events, #[\EventSauce\ObjectHydrator\MapFrom('add_events')] public ?array $addEvents, #[\EventSauce\ObjectHydrator\MapFrom('remove_events')] public ?array $removeEvents, public ?bool $active)
    {
    }
}
