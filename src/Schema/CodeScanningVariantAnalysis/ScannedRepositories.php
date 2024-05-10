<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysis;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ScannedRepositories
{
    public const SCHEMA_JSON         = '{
    "required": [
        "repository",
        "analysis_status"
    ],
    "type": "object",
    "properties": {
        "repository": {
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
        "analysis_status": {
            "enum": [
                "pending",
                "in_progress",
                "succeeded",
                "failed",
                "canceled",
                "timed_out"
            ],
            "type": "string",
            "description": "The new status of the CodeQL variant analysis repository task."
        },
        "result_count": {
            "type": "integer",
            "description": "The number of results in the case of a successful analysis. This is only available for successful analyses."
        },
        "artifact_size_in_bytes": {
            "type": "integer",
            "description": "The size of the artifact. This is only available for successful analyses."
        },
        "failure_message": {
            "type": "string",
            "description": "The reason of the failure of this repo task. This is only available if the repository task has failed."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "repository": {
        "id": 1296269,
        "name": "Hello-World",
        "full_name": "octocat\\/Hello-World",
        "private": false,
        "stargazers_count": 80,
        "updated_at": "2011-01-26T19:14:43Z"
    },
    "analysis_status": "pending",
    "result_count": 12,
    "artifact_size_in_bytes": 22,
    "failure_message": "generated"
}';

    /**
     * repository: Repository Identifier
     * analysisStatus: The new status of the CodeQL variant analysis repository task.
     * resultCount: The number of results in the case of a successful analysis. This is only available for successful analyses.
     * artifactSizeInBytes: The size of the artifact. This is only available for successful analyses.
     * failureMessage: The reason of the failure of this repo task. This is only available if the repository task has failed.
     */
    public function __construct(public Schema\CodeScanningVariantAnalysisRepository $repository, #[MapFrom('analysis_status')]
    public string $analysisStatus, #[MapFrom('result_count')]
    public int|null $resultCount, #[MapFrom('artifact_size_in_bytes')]
    public int|null $artifactSizeInBytes, #[MapFrom('failure_message')]
    public string|null $failureMessage,)
    {
    }
}
