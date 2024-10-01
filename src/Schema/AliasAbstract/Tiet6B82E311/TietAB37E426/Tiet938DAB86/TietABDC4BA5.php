<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet6B82E311\TietAB37E426\Tiet938DAB86;

abstract readonly class TietABDC4BA5
{
    public const SCHEMA_JSON         = '{
    "required": [
        "users"
    ],
    "type": "object",
    "properties": {
        "users": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The username for users"
        }
    },
    "example": {
        "users": [
            "mona"
        ]
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "users": [
        "generated",
        "generated"
    ]
}';

    /**
     * users: The username for users
     */
    public function __construct(public array $users)
    {
    }
}
