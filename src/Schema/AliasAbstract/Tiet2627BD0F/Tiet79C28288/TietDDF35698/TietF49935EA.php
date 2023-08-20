<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet2627BD0F\Tiet79C28288\TietDDF35698;

abstract readonly class TietF49935EA
{
    public const SCHEMA_JSON         = '{
    "oneOf": [
        {
            "required": [
                "teams"
            ],
            "type": "object",
            "properties": {
                "teams": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The slug values for teams"
                }
            },
            "example": {
                "teams": [
                    "my-team"
                ]
            }
        },
        {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The slug values for teams"
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
