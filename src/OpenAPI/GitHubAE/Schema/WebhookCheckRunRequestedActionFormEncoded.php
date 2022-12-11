<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WebhookCheckRunRequestedActionFormEncoded
{
    public const SCHEMA_TITLE = 'Check Run Requested Action Event';
    public const SCHEMA_DESCRIPTION = 'The check_run.requested_action webhook encoded with URL encoding';
    /**
     * A URL-encoded string of the check_run.requested_action JSON payload. The decoded payload is a JSON object.
     */
    private string $payload;
    /**
     * A URL-encoded string of the check_run.requested_action JSON payload. The decoded payload is a JSON object.
     */
    public function payload() : string
    {
        return $this->payload;
    }
}
