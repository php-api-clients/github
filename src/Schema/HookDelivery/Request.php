<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\HookDelivery;

use ApiClients\Client\GitHub\Schema;

final readonly class Request
{
    public const SCHEMA_JSON         = '{
    "required": [
        "headers",
        "payload"
    ],
    "type": "object",
    "properties": {
        "headers": {
            "type": [
                "object",
                "null"
            ],
            "description": "The request headers sent with the webhook delivery.",
            "additionalProperties": true
        },
        "payload": {
            "type": [
                "object",
                "null"
            ],
            "description": "The webhook payload.",
            "additionalProperties": true
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "headers": [],
    "payload": []
}';

    /**
     * headers: The request headers sent with the webhook delivery.
     * payload: The webhook payload.
     */
    public function __construct(public Schema\HookDelivery\Request\Headers|null $headers, public Schema\HookDelivery\Request\Payload|null $payload)
    {
    }
}
