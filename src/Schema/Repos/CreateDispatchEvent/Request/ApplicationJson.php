<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreateDispatchEvent\Request;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["event_type"],"type":"object","properties":{"event_type":{"maxLength":100,"minLength":1,"type":"string","description":"A custom webhook event name. Must be 100 characters or fewer."},"client_payload":{"maxProperties":10,"type":"object","description":"JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.","additionalProperties":true}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"event_type":"generated","client_payload":[]}';

    /**
     * eventType: A custom webhook event name. Must be 100 characters or fewer.
     * clientPayload: JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.
     */
    public function __construct(#[MapFrom('event_type')]
    public string $eventType, #[MapFrom('client_payload')]
    public Schema\Repos\CreateDispatchEvent\Request\ApplicationJson\ClientPayload|null $clientPayload,)
    {
    }
}
