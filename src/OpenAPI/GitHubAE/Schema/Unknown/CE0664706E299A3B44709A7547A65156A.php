<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CE0664706E299A3B44709A7547A65156A
{
    public const SCHEMA_JSON = '{"required":["event_type"],"type":"object","properties":{"event_type":{"maxLength":100,"minLength":1,"type":"string","description":"A custom webhook event name. Must be 100 characters or fewer."},"client_payload":{"maxProperties":10,"type":"object","description":"JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = 'c_e0664706e299a3b44709a7547a65156a';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A custom webhook event name. Must be 100 characters or fewer.
     */
    private string $event_type;
    /**
     * JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CE0664706E299A3B44709A7547A65156A\ClientPayload::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CE0664706E299A3B44709A7547A65156A\ClientPayload $client_payload = null;
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
    public function client_payload() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CE0664706E299A3B44709A7547A65156A\ClientPayload
    {
        return $this->client_payload;
    }
}
