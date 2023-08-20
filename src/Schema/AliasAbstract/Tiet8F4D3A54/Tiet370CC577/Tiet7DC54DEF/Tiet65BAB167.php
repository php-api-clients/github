<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet8F4D3A54\Tiet370CC577\Tiet7DC54DEF;

abstract readonly class Tiet65BAB167
{
    public const SCHEMA_JSON         = '{
    "oneOf": [
        {
            "required": [
                "contexts"
            ],
            "type": "object",
            "properties": {
                "contexts": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The name of the status checks"
                }
            },
            "example": {
                "contexts": [
                    "contexts"
                ]
            }
        },
        {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The name of the status checks"
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
