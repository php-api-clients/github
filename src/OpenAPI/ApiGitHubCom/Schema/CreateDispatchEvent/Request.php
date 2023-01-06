<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateDispatchEvent;

final class Request
{
    public const SCHEMA_JSON = '{"required":["event_type"],"type":"object","properties":{"event_type":{"maxLength":100,"minLength":1,"type":"string","description":"A custom webhook event name. Must be 100 characters or fewer."},"client_payload":{"maxProperties":10,"type":"object","description":"JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = 'CreateDispatchEvent\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A custom webhook event name. Must be 100 characters or fewer.
     */
    private string $event_type;
    /**
     * JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\ClientPayload::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\ClientPayload $client_payload = null;
    /**
     * A custom webhook event name. Must be 100 characters or fewer.
     */
    public function event_type() : string
    {
        return $this->event_type;
    }
    /**
     * JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.
     */
    public function client_payload() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\ClientPayload
    {
        return $this->client_payload;
    }
}
