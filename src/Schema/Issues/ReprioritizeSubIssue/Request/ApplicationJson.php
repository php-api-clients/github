<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Issues\ReprioritizeSubIssue\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "sub_issue_id"
    ],
    "type": "object",
    "properties": {
        "sub_issue_id": {
            "type": "integer",
            "description": "The id of the sub-issue to reprioritize"
        },
        "after_id": {
            "type": "integer",
            "description": "The id of the sub-issue to be prioritized after (either positional argument after OR before should be specified)."
        },
        "before_id": {
            "type": "integer",
            "description": "The id of the sub-issue to be prioritized before (either positional argument after OR before should be specified)."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "sub_issue_id": 12,
    "after_id": 8,
    "before_id": 9
}';

    /**
     * subIssueId: The id of the sub-issue to reprioritize
     * afterId: The id of the sub-issue to be prioritized after (either positional argument after OR before should be specified).
     * beforeId: The id of the sub-issue to be prioritized before (either positional argument after OR before should be specified).
     */
    public function __construct(#[MapFrom('sub_issue_id')]
    public int $subIssueId, #[MapFrom('after_id')]
    public int|null $afterId, #[MapFrom('before_id')]
    public int|null $beforeId,)
    {
    }
}
