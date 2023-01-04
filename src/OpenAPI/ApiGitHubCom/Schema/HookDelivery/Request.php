<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery;

final class Request
{
    public const SCHEMA_JSON = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true},"payload":{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = 'HookDelivery\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The request headers sent with the webhook delivery.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Headers::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Headers $headers;
    /**
     * The webhook payload.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Payload::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Payload $payload;
    /**
     * The request headers sent with the webhook delivery.
     */
    public function headers() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Headers
    {
        return $this->headers;
    }
    /**
     * The webhook payload.
     */
    public function payload() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Payload
    {
        return $this->payload;
    }
}
