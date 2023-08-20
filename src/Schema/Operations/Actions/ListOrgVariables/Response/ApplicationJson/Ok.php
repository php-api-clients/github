<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "variables"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "variables": {
            "type": "array",
            "items": {
                "title": "Actions Variable for an Organization",
                "required": [
                    "name",
                    "value",
                    "created_at",
                    "updated_at",
                    "visibility"
                ],
                "type": "object",
                "properties": {
                    "name": {
                        "type": "string",
                        "description": "The name of the variable.",
                        "examples": [
                            "USERNAME"
                        ]
                    },
                    "value": {
                        "type": "string",
                        "description": "The value of the variable.",
                        "examples": [
                            "octocat"
                        ]
                    },
                    "created_at": {
                        "type": "string",
                        "description": "The date and time at which the variable was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.",
                        "format": "date-time",
                        "examples": [
                            "2019-01-24T22:45:36.000Z"
                        ]
                    },
                    "updated_at": {
                        "type": "string",
                        "description": "The date and time at which the variable was last updated, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.",
                        "format": "date-time",
                        "examples": [
                            "2019-01-24T22:45:36.000Z"
                        ]
                    },
                    "visibility": {
                        "enum": [
                            "all",
                            "private",
                            "selected"
                        ],
                        "type": "string",
                        "description": "Visibility of a variable"
                    },
                    "selected_repositories_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "https:\\/\\/api.github.com\\/organizations\\/org\\/variables\\/USERNAME\\/repositories"
                        ]
                    }
                },
                "description": "Organization variable for GitHub Actions."
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "variables": [
        {
            "name": "USERNAME",
            "value": "octocat",
            "created_at": "2019-01-24T22:45:36.000Z",
            "updated_at": "2019-01-24T22:45:36.000Z",
            "visibility": "selected",
            "selected_repositories_url": "https:\\/\\/api.github.com\\/organizations\\/org\\/variables\\/USERNAME\\/repositories"
        },
        {
            "name": "USERNAME",
            "value": "octocat",
            "created_at": "2019-01-24T22:45:36.000Z",
            "updated_at": "2019-01-24T22:45:36.000Z",
            "visibility": "selected",
            "selected_repositories_url": "https:\\/\\/api.github.com\\/organizations\\/org\\/variables\\/USERNAME\\/repositories"
        }
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, public array $variables,)
    {
    }
}
