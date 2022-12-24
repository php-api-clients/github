<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WebhookCheckRunCompletedFormEncoded
{
    public const SCHEMA_JSON = '{"title":"Check Run Completed Event","required":["payload"],"type":"object","properties":{"payload":{"type":"string","description":"A URL-encoded string of the check_run.completed JSON payload. The decoded payload is a JSON object."}},"description":"The check_run.completed webhook encoded with URL encoding"}';
    public const SCHEMA_TITLE = 'Check Run Completed Event';
    public const SCHEMA_DESCRIPTION = 'The check_run.completed webhook encoded with URL encoding';
    /**
     * A URL-encoded string of the check_run.completed JSON payload. The decoded payload is a JSON object.
     */
    private string $payload;
    /**
     * A URL-encoded string of the check_run.completed JSON payload. The decoded payload is a JSON object.
     */
    public function payload() : string
    {
        return $this->payload;
    }
}