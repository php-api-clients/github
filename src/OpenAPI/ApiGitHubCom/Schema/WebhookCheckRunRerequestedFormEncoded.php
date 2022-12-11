<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WebhookCheckRunRerequestedFormEncoded
{
    public const SCHEMA_TITLE = 'Check Run Re-Requested Event';
    public const SCHEMA_DESCRIPTION = 'The check_run.rerequested webhook encoded with URL encoding';
    /**
     * A URL-encoded string of the check_run.rerequested JSON payload. The decoded payload is a JSON object.
     */
    private string $payload;
    /**
     * A URL-encoded string of the check_run.rerequested JSON payload. The decoded payload is a JSON object.
     */
    public function payload() : string
    {
        return $this->payload;
    }
}
