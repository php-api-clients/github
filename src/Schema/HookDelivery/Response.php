<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\HookDelivery;

final readonly class Response
{
    public const SCHEMA_JSON         = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The response headers received when the delivery was made.","additionalProperties":true},"payload":{"type":["string","null"],"description":"The response payload received.","additionalProperties":true}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"headers":"generated","payload":"generated"}';

    /**
     * headers: The response headers received when the delivery was made.
     * payload: The response payload received.
     */
    public function __construct(public string $headers, public ?string $payload)
    {
    }
}
