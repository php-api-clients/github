<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet58E2D92A\Tiet7ABA442F\TietDB0A439E;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietB965962E
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
                "title": "Actions Secret",
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
                "description": "Set secrets for GitHub Actions."
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
