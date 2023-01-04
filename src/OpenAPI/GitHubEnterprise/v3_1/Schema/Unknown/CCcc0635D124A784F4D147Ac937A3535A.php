<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CCcc0635D124A784F4D147Ac937A3535A
{
    public const SCHEMA_JSON = '{"required":["event_type"],"type":"object","properties":{"event_type":{"maxLength":100,"minLength":1,"type":"string","description":"A custom webhook event name. Must be 100 characters or fewer."},"client_payload":{"maxProperties":10,"type":"object","description":"JSON payload with extra information about the webhook event that your action or worklow may use.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = 'c_ccc0635d124a784f4d147ac937a3535a';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A custom webhook event name. Must be 100 characters or fewer.
     */
    private string $event_type;
    /**
     * JSON payload with extra information about the webhook event that your action or worklow may use.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CCcc0635D124A784F4D147Ac937A3535A\ClientPayload::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CCcc0635D124A784F4D147Ac937A3535A\ClientPayload $client_payload = null;
    /**
     * A custom webhook event name. Must be 100 characters or fewer.
     */
    public function event_type() : string
    {
        return $this->event_type;
    }
    /**
     * JSON payload with extra information about the webhook event that your action or worklow may use.
     */
    public function client_payload() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CCcc0635D124A784F4D147Ac937A3535A\ClientPayload
    {
        return $this->client_payload;
    }
}
