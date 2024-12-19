<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\PrivateRegistries\ListOrgPrivateRegistries\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "configurations"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "configurations": {
            "type": "array",
            "items": {
                "title": "Organization private registry",
                "required": [
                    "name",
                    "registry_type",
                    "visibility",
                    "created_at",
                    "updated_at"
                ],
                "type": "object",
                "properties": {
                    "name": {
                        "type": "string",
                        "description": "The name of the private registry configuration.",
                        "examples": [
                            "MAVEN_REPOSITORY_SECRET"
                        ]
                    },
                    "registry_type": {
                        "enum": [
                            "maven_repository"
                        ],
                        "type": "string",
                        "description": "The registry type."
                    },
                    "username": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The username to use when authenticating with the private registry.",
                        "examples": [
                            "monalisa"
                        ]
                    },
                    "visibility": {
                        "enum": [
                            "all",
                            "private",
                            "selected"
                        ],
                        "type": "string",
                        "description": "Which type of organization repositories have access to the private registry."
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
                "description": "Private registry configuration for an organization"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "configurations": [
        {
            "name": "MAVEN_REPOSITORY_SECRET",
            "registry_type": "maven_repository",
            "username": "monalisa",
            "visibility": "selected",
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00"
        },
        {
            "name": "MAVEN_REPOSITORY_SECRET",
            "registry_type": "maven_repository",
            "username": "monalisa",
            "visibility": "selected",
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00"
        }
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, public array $configurations,)
    {
    }
}
