<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\HookDelivery;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Request
{
    public const SCHEMA_JSON = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true},"payload":{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"headers":null,"payload":null}';
    /**
     * headers: The request headers sent with the webhook delivery.
     * payload: The webhook payload.
     */
    public function __construct(public mixed $headers, public mixed $payload)
    {
    }
}
