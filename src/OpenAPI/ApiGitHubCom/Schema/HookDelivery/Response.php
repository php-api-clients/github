<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery\Response\Headers;

final readonly class Response
{
    public const SCHEMA_JSON        = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The response headers received when the delivery was made.","additionalProperties":true},"payload":{"type":["string","null"],"description":"The response payload received.","additionalProperties":true}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The response headers received when the delivery was made.
     */
    public ?Headers $headers;
    /**
     * The response payload received.
     */
    public ?string $payload;

    public function __construct(Headers $headers, string $payload)
    {
        $this->headers = $headers;
        $this->payload = $payload;
    }
}
