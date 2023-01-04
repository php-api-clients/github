<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\HookDelivery;

final class Request
{
    public const SCHEMA_JSON = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true},"payload":{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = 'HookDelivery\\Request';
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
