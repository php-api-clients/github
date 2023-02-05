<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery;

final class Request
{
    public const SCHEMA_JSON = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true},"payload":{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = 'HookDelivery\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The request headers sent with the webhook delivery.
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Headers $headers;
    /**
     * The webhook payload.
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Payload $payload;
    public function __construct(?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Headers $headers, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Payload $payload)
    {
        $this->headers = $headers;
        $this->payload = $payload;
    }
}
