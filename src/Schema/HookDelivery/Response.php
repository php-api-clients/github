<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\HookDelivery;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Response
{
    public const SCHEMA_JSON = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The response headers received when the delivery was made.","additionalProperties":true},"payload":{"type":["string","null"],"description":"The response payload received.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"headers":null,"payload":"generated_payload_null"}';
    /**
     * headers: The response headers received when the delivery was made.
     * payload: The response payload received.
     */
    public function __construct(public mixed $headers, public ?string $payload)
    {
    }
}
