<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\CreateDispatchEvent\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["event_type"],"type":"object","properties":{"event_type":{"maxLength":100,"minLength":1,"type":"string","description":"A custom webhook event name. Must be 100 characters or fewer."},"client_payload":{"maxProperties":10,"type":"object","description":"JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A custom webhook event name. Must be 100 characters or fewer.
     */
    public ?string $event_type;
    /**
     * JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.
     */
    public \ApiClients\Client\Github\Schema\Repos\CreateDispatchEvent\Request\Applicationjson\ClientPayload $client_payload;
    public function __construct(string $event_type, \ApiClients\Client\Github\Schema\Repos\CreateDispatchEvent\Request\Applicationjson\ClientPayload $client_payload)
    {
        $this->event_type = $event_type;
        $this->client_payload = $client_payload;
    }
}
