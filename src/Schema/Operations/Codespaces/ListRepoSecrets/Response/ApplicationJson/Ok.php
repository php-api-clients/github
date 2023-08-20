<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepoSecrets\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "secrets"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "secrets": {
            "type": "array",
            "items": {
                "title": "Codespaces Secret",
                "required": [
                    "name",
                    "created_at",
                    "updated_at"
                ],
                "type": "object",
                "properties": {
                    "name": {
                        "type": "string",
                        "description": "The name of the secret.",
                        "examples": [
                            "SECRET_TOKEN"
                        ]
                    },
                    "created_at": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "updated_at": {
                        "type": "string",
                        "format": "date-time"
                    }
                },
                "description": "Set repository secrets for GitHub Codespaces."
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "secrets": [
        {
            "name": "SECRET_TOKEN",
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00"
        },
        {
            "name": "SECRET_TOKEN",
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00"
        }
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, public array $secrets,)
    {
    }
}
