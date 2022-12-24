<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C355A0E2B6B4056313Ac28E07Ba36B9B2
{
    public const SCHEMA_JSON = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true},"payload":{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = 'c_355a0e2b6b4056313ac28e07ba36b9b2';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The request headers sent with the webhook delivery.
     */
    private $headers;
    /**
     * The webhook payload.
     */
    private $payload;
    /**
     * The request headers sent with the webhook delivery.
     */
    public function headers()
    {
        return $this->headers;
    }
    /**
     * The webhook payload.
     */
    public function payload()
    {
        return $this->payload;
    }
}
