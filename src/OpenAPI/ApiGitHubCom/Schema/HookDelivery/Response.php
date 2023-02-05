<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery;

final class Response
{
    public const SCHEMA_JSON = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The response headers received when the delivery was made.","additionalProperties":true},"payload":{"type":["string","null"],"description":"The response payload received.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = 'HookDelivery\\Response';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The response headers received when the delivery was made.
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Response\Headers $headers;
    /**
     * The response payload received.
     */
    public readonly ?string $payload;
    public function __construct(?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Response\Headers $headers, string $payload)
    {
        $this->headers = $headers;
        $this->payload = $payload;
    }
}
