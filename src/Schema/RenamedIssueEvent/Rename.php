<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RenamedIssueEvent;

final readonly class Rename
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from",
        "to"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "string"
        },
        "to": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated",
    "to": "generated"
}';

    public function __construct(public string $from, public string $to)
    {
    }
}
