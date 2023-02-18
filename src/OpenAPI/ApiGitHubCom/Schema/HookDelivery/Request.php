<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery\Request\Headers;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery\Request\Payload;

final readonly class Request
{
    public const SCHEMA_JSON        = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true},"payload":{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The request headers sent with the webhook delivery.
     */
    public ?Headers $headers;
    /**
     * The webhook payload.
     */
    public ?Payload $payload;

    public function __construct(Headers $headers, Payload $payload)
    {
        $this->headers = $headers;
        $this->payload = $payload;
    }
}
