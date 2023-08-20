<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\GitTag;

final readonly class Tagger
{
    public const SCHEMA_JSON         = '{
    "required": [
        "date",
        "email",
        "name"
    ],
    "type": "object",
    "properties": {
        "date": {
            "type": "string"
        },
        "email": {
            "type": "string"
        },
        "name": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "date": "generated",
    "email": "generated",
    "name": "generated"
}';

    public function __construct(public string $date, public string $email, public string $name)
    {
    }
}
