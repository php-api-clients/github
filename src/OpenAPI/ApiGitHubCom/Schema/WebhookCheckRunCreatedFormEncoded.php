<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WebhookCheckRunCreatedFormEncoded
{
    public const SCHEMA_TITLE = 'Check Run Created Event';
    public const SCHEMA_DESCRIPTION = 'The check_run.created webhook encoded with URL encoding';
    /**
     * A URL-encoded string of the check_run.created JSON payload. The decoded payload is a JSON object.
     */
    private string $payload;
    /**
     * A URL-encoded string of the check_run.created JSON payload. The decoded payload is a JSON object.
     */
    public function payload() : string
    {
        return $this->payload;
    }
}
