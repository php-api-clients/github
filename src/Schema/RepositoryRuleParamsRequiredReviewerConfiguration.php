<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleParamsRequiredReviewerConfiguration
{
    public const SCHEMA_JSON         = '{
    "title": "RequiredReviewerConfiguration",
    "required": [
        "file_patterns",
        "minimum_approvals",
        "reviewer_id"
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
        "reviewer_id": {
            "type": "string",
            "description": "Node ID of the team which must review changes to matching files."
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
    "reviewer_id": "generated"
}';

    /**
     * filePatterns: Array of file patterns. Pull requests which change matching files must be approved by the specified team. File patterns use the same syntax as `.gitignore` files.
     * minimumApprovals: Minimum number of approvals required from the specified team. If set to zero, the team will be added to the pull request but approval is optional.
     * reviewerId: Node ID of the team which must review changes to matching files.
     */
    public function __construct(#[MapFrom('file_patterns')]
    public array $filePatterns, #[MapFrom('minimum_approvals')]
    public int $minimumApprovals, #[MapFrom('reviewer_id')]
    public string $reviewerId,)
    {
    }
}
