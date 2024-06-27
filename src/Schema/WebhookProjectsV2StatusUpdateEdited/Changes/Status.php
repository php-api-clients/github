<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes;

final readonly class Status
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "from": {
            "enum": [
                "INACTIVE",
                "ON_TRACK",
                "AT_RISK",
                "OFF_TRACK",
                "COMPLETE",
                null
            ],
            "type": [
                "string",
                "null"
            ]
        },
        "to": {
            "enum": [
                "INACTIVE",
                "ON_TRACK",
                "AT_RISK",
                "OFF_TRACK",
                "COMPLETE",
                null
            ],
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "COMPLETE",
    "to": "COMPLETE"
}';

    public function __construct(public string|null $from, public string|null $to)
    {
    }
}
