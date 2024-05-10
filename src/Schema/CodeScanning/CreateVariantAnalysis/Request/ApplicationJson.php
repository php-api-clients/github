<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CodeScanning\CreateVariantAnalysis\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "language",
        "query_pack"
    ],
    "type": "object",
    "oneOf": [
        {
            "required": [
                "repositories"
            ]
        },
        {
            "required": [
                "repository_lists"
            ]
        },
        {
            "required": [
                "repository_owners"
            ]
        }
    ],
    "properties": {
        "language": {
            "enum": [
                "cpp",
                "csharp",
                "go",
                "java",
                "javascript",
                "python",
                "ruby",
                "swift"
            ],
            "type": "string",
            "description": "The language targeted by the CodeQL query"
        },
        "query_pack": {
            "type": "string",
            "description": "A Base64-encoded tarball containing a CodeQL query and all its dependencies"
        },
        "repositories": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "List of repository names (in the form `owner\\/repo-name`) to run the query against. Precisely one property from `repositories`, `repository_lists` and `repository_owners` is required."
        },
        "repository_lists": {
            "maxItems": 1,
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "List of repository lists to run the query against. Precisely one property from `repositories`, `repository_lists` and `repository_owners` is required."
        },
        "repository_owners": {
            "maxItems": 1,
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "List of organization or user names whose repositories the query should be run against. Precisely one property from `repositories`, `repository_lists` and `repository_owners` is required."
        }
    },
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "language": "swift",
    "query_pack": "generated",
    "repositories": [
        "generated",
        "generated"
    ],
    "repository_lists": [
        "generated"
    ],
    "repository_owners": [
        "generated"
    ]
}';

    /**
     * language: The language targeted by the CodeQL query
     * queryPack: A Base64-encoded tarball containing a CodeQL query and all its dependencies
     * repositories: List of repository names (in the form `owner/repo-name`) to run the query against. Precisely one property from `repositories`, `repository_lists` and `repository_owners` is required.
     * repositoryLists: List of repository lists to run the query against. Precisely one property from `repositories`, `repository_lists` and `repository_owners` is required.
     * repositoryOwners: List of organization or user names whose repositories the query should be run against. Precisely one property from `repositories`, `repository_lists` and `repository_owners` is required.
     */
    public function __construct(public string $language, #[MapFrom('query_pack')]
    public string $queryPack, public array|null $repositories, #[MapFrom('repository_lists')]
    public array|null $repositoryLists, #[MapFrom('repository_owners')]
    public array|null $repositoryOwners,)
    {
    }
}
