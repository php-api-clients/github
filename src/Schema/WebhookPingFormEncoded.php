<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class WebhookPingFormEncoded
{
    public const SCHEMA_JSON         = '{"required":["payload"],"type":"object","properties":{"payload":{"type":"string","description":"A URL-encoded string of the ping JSON payload. The decoded payload is a JSON object."}},"description":"The webhooks ping payload encoded with URL encoding."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The webhooks ping payload encoded with URL encoding.';
    public const SCHEMA_EXAMPLE_DATA = '{"payload":"generated"}';

    /**
     * payload: A URL-encoded string of the ping JSON payload. The decoded payload is a JSON object.
     */
    public function __construct(public string $payload)
    {
    }
}
