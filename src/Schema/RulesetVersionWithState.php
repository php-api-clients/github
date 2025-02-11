<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class RulesetVersionWithState
{
    public const SCHEMA_JSON         = '{
    "allOf": [
        {
            "title": "Ruleset version",
            "required": [
                "version_id",
                "actor",
                "updated_at"
            ],
            "type": "object",
            "properties": {
                "version_id": {
                    "type": "integer",
                    "description": "The ID of the previous version of the ruleset"
                },
                "actor": {
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer"
                        },
                        "type": {
                            "type": "string"
                        }
                    },
                    "description": "The actor who updated the ruleset"
                },
                "updated_at": {
                    "type": "string",
                    "format": "date-time"
                }
            },
            "description": "The historical version of a ruleset"
        },
        {
            "required": [
                "state"
            ],
            "type": "object",
            "properties": {
                "state": {
                    "type": "object",
                    "description": "The state of the ruleset version"
                }
            }
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
