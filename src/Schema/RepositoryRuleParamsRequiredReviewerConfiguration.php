<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleParamsRequiredReviewerConfiguration
{
    public const SCHEMA_JSON         = '{
    "title": "RequiredReviewerConfiguration",
    "required": [
        "file_patterns",
        "minimum_approvals"
    ],
    "type": "object",
    "properties": {
        "file_patterns": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "Array of file patterns. Pull requests which change matching files must be approved by the specified team. File patterns use the same syntax as `.gitignore` files."
        },
        "minimum_approvals": {
            "type": "integer",
            "description": "Minimum number of approvals required from the specified team. If set to zero, the team will be added to the pull request but approval is optional."
        },
        "reviewer": {
            "title": "Reviewer",
            "required": [
                "id",
                "type"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "description": "ID of the reviewer which must review changes to matching files."
                },
                "type": {
                    "enum": [
                        "Team"
                    ],
                    "type": "string",
                    "description": "The type of the reviewer"
                }
            },
            "description": "A required reviewing team"
        }
    },
    "description": "A reviewing team, and file patterns describing which files they must approve changes to."
}';
    public const SCHEMA_TITLE        = 'RequiredReviewerConfiguration';
    public const SCHEMA_DESCRIPTION  = 'A reviewing team, and file patterns describing which files they must approve changes to.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "file_patterns": [
        "generated",
        "generated"
    ],
    "minimum_approvals": 17,
    "reviewer": {
        "id": 2,
        "type": "Team"
    }
}';

    /**
     * filePatterns: Array of file patterns. Pull requests which change matching files must be approved by the specified team. File patterns use the same syntax as `.gitignore` files.
     * minimumApprovals: Minimum number of approvals required from the specified team. If set to zero, the team will be added to the pull request but approval is optional.
     * reviewer: A required reviewing team
     */
    public function __construct(#[MapFrom('file_patterns')]
    public array $filePatterns, #[MapFrom('minimum_approvals')]
    public int $minimumApprovals, public Schema\RepositoryRuleParamsReviewer|null $reviewer,)
    {
    }
}
