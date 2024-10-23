<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietF800B58D\TietE457AE55\TietB6D6702A;

abstract readonly class Tiet18FEC578
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "reviewers": {
            "type": "array",
            "items": {
                "required": [
                    "reviewer_id",
                    "reviewer_type"
                ],
                "type": "object",
                "properties": {
                    "reviewer_id": {
                        "type": "integer",
                        "description": "The ID of the team or role selected as a bypass reviewer"
                    },
                    "reviewer_type": {
                        "enum": [
                            "TEAM",
                            "ROLE"
                        ],
                        "type": "string",
                        "description": "The type of the bypass reviewer"
                    }
                }
            },
            "description": "The bypass reviewers for secret scanning delegated bypass"
        }
    },
    "description": "Feature options for secret scanning delegated bypass"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Feature options for secret scanning delegated bypass';
    public const SCHEMA_EXAMPLE_DATA = '{
    "reviewers": [
        {
            "reviewer_id": 11,
            "reviewer_type": "TEAM"
        },
        {
            "reviewer_id": 11,
            "reviewer_type": "TEAM"
        }
    ]
}';

    /**
     * reviewers: The bypass reviewers for secret scanning delegated bypass
     */
    public function __construct(public array|null $reviewers)
    {
    }
}
