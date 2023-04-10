<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookPing;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Hook
{
    public const SCHEMA_JSON = '{"title":"Webhook","required":["id","type","name","active","events","config","created_at","updated_at"],"type":"object","properties":{"active":{"type":"boolean","description":"Determines whether the hook is actually triggered for the events it subscribes to."},"app_id":{"type":"integer","description":"Only included for GitHub Apps. When you register a new GitHub App, GitHub sends a ping event to the webhook URL you specified during registration. The GitHub App ID sent in this field is required for authenticating an app."},"config":{"type":"object","properties":{"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]}}},"created_at":{"type":"string","format":"date-time"},"deliveries_url":{"type":"string","format":"uri"},"events":{"type":"array","items":{"type":"string"},"description":"Determines what events the hook is triggered for. Default: [\'push\']."},"id":{"type":"integer","description":"Unique identifier of the webhook."},"last_response":{"title":"Hook Response","required":["code","status","message"],"type":"object","properties":{"code":{"type":["integer","null"]},"status":{"type":["string","null"]},"message":{"type":["string","null"]}}},"name":{"enum":["web"],"type":"string","description":"The type of webhook. The only valid value is \'web\'."},"ping_url":{"type":"string","format":"uri"},"test_url":{"type":"string","format":"uri"},"type":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}},"description":"The webhook that is being pinged"}';
    public const SCHEMA_TITLE = 'Webhook';
    public const SCHEMA_DESCRIPTION = 'The webhook that is being pinged';
    public const SCHEMA_EXAMPLE_DATA = '{"active":false,"app_id":13,"config":{"content_type":"\\"json\\"","insecure_ssl":"generated_insecure_ssl_null","secret":"\\"********\\"","url":"https:\\/\\/example.com\\/webhook"},"created_at":"1970-01-01T00:00:00+00:00","deliveries_url":"https:\\/\\/example.com\\/","events":["generated_events_null"],"id":13,"last_response":{"code":13,"status":"generated_status_null","message":"generated_message_null"},"name":"web","ping_url":"https:\\/\\/example.com\\/","test_url":"https:\\/\\/example.com\\/","type":"generated_type_null","updated_at":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/"}';
    /**
     * active: Determines whether the hook is actually triggered for the events it subscribes to.
     * appId: Only included for GitHub Apps. When you register a new GitHub App, GitHub sends a ping event to the webhook URL you specified during registration. The GitHub App ID sent in this field is required for authenticating an app.
     * events: Determines what events the hook is triggered for. Default: ['push'].
     * @param array<string> $events
     * id: Unique identifier of the webhook.
     * name: The type of webhook. The only valid value is 'web'.
     */
    public function __construct(public bool $active, #[\EventSauce\ObjectHydrator\MapFrom('app_id')] public ?int $appId, public Schema\WebhookPing\Hook\Config $config, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('deliveries_url')] public ?string $deliveriesUrl, public array $events, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('last_response')] public ?Schema\HookResponse $lastResponse, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('ping_url')] public ?string $pingUrl, #[\EventSauce\ObjectHydrator\MapFrom('test_url')] public ?string $testUrl, public string $type, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, public ?string $url)
    {
    }
}
