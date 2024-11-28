<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Issues\AddSubIssue\Request;

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
            "description": "The sub-issue to add"
        },
        "replace_parent": {
            "type": "boolean",
            "description": "Option that, when true, instructs the operation to replace the sub-issues current parent issue"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "sub_issue_id": 12,
    "replace_parent": false
}';

    /**
     * subIssueId: The sub-issue to add
     * replaceParent: Option that, when true, instructs the operation to replace the sub-issues current parent issue
     */
    public function __construct(#[MapFrom('sub_issue_id')]
    public int $subIssueId, #[MapFrom('replace_parent')]
    public bool|null $replaceParent,)
    {
    }
}
