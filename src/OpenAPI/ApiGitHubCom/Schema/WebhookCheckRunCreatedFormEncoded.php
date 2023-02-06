<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WebhookCheckRunCreatedFormEncoded
{
    public const SCHEMA_JSON = '{"title":"Check Run Created Event","required":["payload"],"type":"object","properties":{"payload":{"type":"string","description":"A URL-encoded string of the check_run.created JSON payload. The decoded payload is a JSON object."}},"description":"The check_run.created webhook encoded with URL encoding"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Check Run Created Event';
    public const SCHEMA_DESCRIPTION = 'The check_run.created webhook encoded with URL encoding';
    /**
     * A URL-encoded string of the check_run.created JSON payload. The decoded payload is a JSON object.
     */
    public readonly string $payload;
    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }
}
