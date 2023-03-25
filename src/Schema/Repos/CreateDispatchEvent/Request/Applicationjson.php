<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateDispatchEvent\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["event_type"],"type":"object","properties":{"event_type":{"maxLength":100,"minLength":1,"type":"string","description":"A custom webhook event name. Must be 100 characters or fewer."},"client_payload":{"maxProperties":10,"type":"object","description":"JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"eventType":"generated_event_type_null","clientPayload":null}';
    /**
     * eventType: A custom webhook event name. Must be 100 characters or fewer.
     * clientPayload: JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('event_type')] public string $eventType, #[\EventSauce\ObjectHydrator\MapFrom('client_payload')] public mixed $clientPayload)
    {
    }
}
