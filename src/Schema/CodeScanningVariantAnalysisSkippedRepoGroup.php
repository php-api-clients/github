<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningVariantAnalysisSkippedRepoGroup
{
    public const SCHEMA_JSON         = '{
    "required": [
        "repository_count",
        "repositories"
    ],
    "type": "object",
    "properties": {
        "repository_count": {
            "type": "integer",
            "description": "The total number of repositories that were skipped for this reason.",
            "examples": [
                2
            ]
        },
        "repositories": {
            "type": "array",
            "items": {
                "title": "Repository Identifier",
                "required": [
                    "full_name",
                    "id",
                    "name",
                    "private",
                    "stargazers_count",
                    "updated_at"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer",
                        "description": "A unique identifier of the repository.",
                        "examples": [
                            1296269
                        ]
                    },
                    "name": {
                        "type": "string",
                        "description": "The name of the repository.",
                        "examples": [
                            "Hello-World"
                        ]
                    },
                    "full_name": {
                        "type": "string",
                        "description": "The full, globally unique, name of the repository.",
                        "examples": [
                            "octocat\\/Hello-World"
                        ]
                    },
                    "private": {
                        "type": "boolean",
                        "description": "Whether the repository is private."
                    },
                    "stargazers_count": {
                        "type": "integer",
                        "examples": [
                            80
                        ]
                    },
                    "updated_at": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "date-time",
                        "examples": [
                            "2011-01-26T19:14:43Z"
                        ]
                    }
                },
                "description": "Repository Identifier"
            },
            "description": "A list of repositories that were skipped. This list may not include all repositories that were skipped. This is only available when the repository was found and the user has access to it."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "repository_count": 2,
    "repositories": [
        {
            "id": 1296269,
            "name": "Hello-World",
            "full_name": "octocat\\/Hello-World",
            "private": false,
            "stargazers_count": 80,
            "updated_at": "2011-01-26T19:14:43Z"
        },
        {
            "id": 1296269,
            "name": "Hello-World",
            "full_name": "octocat\\/Hello-World",
            "private": false,
            "stargazers_count": 80,
            "updated_at": "2011-01-26T19:14:43Z"
        }
    ]
}';

    /**
     * repositoryCount: The total number of repositories that were skipped for this reason.
     * repositories: A list of repositories that were skipped. This list may not include all repositories that were skipped. This is only available when the repository was found and the user has access to it.
     */
    public function __construct(#[MapFrom('repository_count')]
    public int $repositoryCount, public array $repositories,)
    {
    }
}
