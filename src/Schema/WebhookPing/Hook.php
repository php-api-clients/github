<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPing;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Hook
{
    public const SCHEMA_JSON = '{"title":"Webhook","required":["id","type","name","active","events","config","created_at","updated_at"],"type":"object","properties":{"active":{"type":"boolean","description":"Determines whether the hook is actually triggered for the events it subscribes to."},"app_id":{"type":"integer","description":"Only included for GitHub Apps. When you register a new GitHub App, GitHub sends a ping event to the webhook URL you specified during registration. The GitHub App ID sent in this field is required for authenticating an app."},"config":{"type":"object","properties":{"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]}}},"created_at":{"type":"string","format":"date-time"},"deliveries_url":{"type":"string","format":"uri"},"events":{"type":"array","items":{"type":"string"},"description":"Determines what events the hook is triggered for. Default: [\'push\']."},"id":{"type":"integer","description":"Unique identifier of the webhook."},"last_response":{"title":"Hook Response","required":["code","status","message"],"type":"object","properties":{"code":{"type":["integer","null"]},"status":{"type":["string","null"]},"message":{"type":["string","null"]}}},"name":{"enum":["web"],"type":"string","description":"The type of webhook. The only valid value is \'web\'."},"ping_url":{"type":"string","format":"uri"},"test_url":{"type":"string","format":"uri"},"type":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}},"description":"The webhook that is being pinged"}';
    public const SCHEMA_TITLE = 'Webhook';
    public const SCHEMA_DESCRIPTION = 'The webhook that is being pinged';
    public const SCHEMA_EXAMPLE_DATA = '{"active":false,"app_id":13,"config":{"content_type":"\\"json\\"","insecure_ssl":"generated_insecure_ssl","secret":"\\"********\\"","url":"https:\\/\\/example.com\\/webhook"},"created_at":"generated_created_at","deliveries_url":"generated_deliveries_url","events":["generated_events"],"id":13,"last_response":{"code":13,"status":"generated_status","message":"generated_message"},"name":"generated_name","ping_url":"generated_ping_url","test_url":"generated_test_url","type":"generated_type","updated_at":"generated_updated_at","url":"generated_url"}';
    /**
     * active: Determines whether the hook is actually triggered for the events it subscribes to.
     * app_id: Only included for GitHub Apps. When you register a new GitHub App, GitHub sends a ping event to the webhook URL you specified during registration. The GitHub App ID sent in this field is required for authenticating an app.
     * events: Determines what events the hook is triggered for. Default: ['push'].
     * @param array<string> $events
     * id: Unique identifier of the webhook.
     * name: The type of webhook. The only valid value is 'web'.
     */
    public function __construct(public bool $active, public ?int $app_id, public Schema\WebhookPing\Hook\Config $config, public string $created_at, public ?string $deliveries_url, public array $events, public int $id, public ?Schema\HookResponse $last_response, public string $name, public ?string $ping_url, public ?string $test_url, public string $type, public string $updated_at, public ?string $url)
    {
    }
}
