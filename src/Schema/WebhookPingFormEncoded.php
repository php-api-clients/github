<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class WebhookPingFormEncoded
{
    public const SCHEMA_JSON = '{"required":["payload"],"type":"object","properties":{"payload":{"type":"string","description":"A URL-encoded string of the ping JSON payload. The decoded payload is a JSON object."}},"description":"The webhooks ping payload encoded with URL encoding."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The webhooks ping payload encoded with URL encoding.';
    public const SCHEMA_EXAMPLE_DATA = '{"payload":"generated_payload_null"}';
    /**
     * payload: A URL-encoded string of the ping JSON payload. The decoded payload is a JSON object.
     */
    public function __construct(public string $payload)
    {
    }
}
