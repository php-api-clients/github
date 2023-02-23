<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\HookDelivery;

final readonly class Request
{
    public const SCHEMA_JSON = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true},"payload":{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The request headers sent with the webhook delivery.
     */
    public ?\ApiClients\Client\Github\Schema\HookDelivery\Request\Headers $headers;
    /**
     * The webhook payload.
     */
    public ?\ApiClients\Client\Github\Schema\HookDelivery\Request\Payload $payload;
    public function __construct(\ApiClients\Client\Github\Schema\HookDelivery\Request\Headers $headers, \ApiClients\Client\Github\Schema\HookDelivery\Request\Payload $payload)
    {
        $this->headers = $headers;
        $this->payload = $payload;
    }
}
