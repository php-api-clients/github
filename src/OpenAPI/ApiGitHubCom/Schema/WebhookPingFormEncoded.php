<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WebhookPingFormEncoded
{
    public const SCHEMA_TITLE = 'webhook-ping-form-encoded';
    public const SCHEMA_DESCRIPTION = 'The webhooks ping payload encoded with URL encoding.';
    /**
     * A URL-encoded string of the ping JSON payload. The decoded payload is a JSON object.
     */
    private string $payload;
    /**
     * A URL-encoded string of the ping JSON payload. The decoded payload is a JSON object.
     */
    public function payload() : string
    {
        return $this->payload;
    }
}
