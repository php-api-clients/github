<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WebhookPingFormEncoded
{
    public const SCHEMA_JSON = '{"required":["payload"],"type":"object","properties":{"payload":{"type":"string","description":"A URL-encoded string of the ping JSON payload. The decoded payload is a JSON object."}},"description":"The webhooks ping payload encoded with URL encoding."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'webhook-ping-form-encoded';
    public const SCHEMA_DESCRIPTION = 'The webhooks ping payload encoded with URL encoding.';
    /**
     * A URL-encoded string of the ping JSON payload. The decoded payload is a JSON object.
     */
    public readonly string $payload;
    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }
}
