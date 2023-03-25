<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateWebhook\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string","description":"Use `web` to create a webhook. Default: `web`. This parameter only accepts the value `web`."},"config":{"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"token":{"type":"string","examples":["\\"abc\\""]},"digest":{"type":"string","examples":["\\"sha256\\""]}},"description":"Key\\/value pairs to provide settings for this webhook. [These are defined below](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos#create-hook-config-params)."},"events":{"type":"array","items":{"type":"string"},"description":"Determines what [events](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads) the hook is triggered for.","default":["push"]},"active":{"type":"boolean","description":"Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.","default":true}},"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","config":{"url":"https:\\/\\/example.com\\/webhook","contentType":"\\"json\\"","secret":"\\"********\\"","insecureSsl":"generated_insecure_ssl_null","token":"\\"abc\\"","digest":"\\"sha256\\""},"events":["generated_events_null"],"active":false}';
    /**
     * name: Use `web` to create a webhook. Default: `web`. This parameter only accepts the value `web`.
     * config: Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/rest/reference/repos#create-hook-config-params).
     * events: Determines what [events](https://docs.github.com/webhooks/event-payloads) the hook is triggered for.
     * @param ?array<string> $events
     * active: Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    public function __construct(public ?string $name, public ?Schema\Repos\CreateWebhook\Request\Applicationjson\Config $config, public ?array $events, public ?bool $active)
    {
    }
}
