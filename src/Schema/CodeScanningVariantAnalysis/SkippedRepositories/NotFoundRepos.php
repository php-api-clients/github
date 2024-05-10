<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysis\SkippedRepositories;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class NotFoundRepos
{
    public const SCHEMA_JSON         = '{
    "required": [
        "repository_count",
        "repository_full_names"
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
        "repository_full_names": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "A list of full repository names that were skipped. This list may not include all repositories that were skipped."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "repository_count": 2,
    "repository_full_names": [
        "generated",
        "generated"
    ]
}';

    /**
     * repositoryCount: The total number of repositories that were skipped for this reason.
     * repositoryFullNames: A list of full repository names that were skipped. This list may not include all repositories that were skipped.
     */
    public function __construct(#[MapFrom('repository_count')]
    public int $repositoryCount, #[MapFrom('repository_full_names')]
    public array $repositoryFullNames,)
    {
    }
}
