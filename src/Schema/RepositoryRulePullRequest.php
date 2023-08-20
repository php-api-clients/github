<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRulePullRequest
{
    public const SCHEMA_JSON         = '{
    "title": "pull_request",
    "required": [
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "pull_request"
            ],
            "type": "string"
        },
        "parameters": {
            "required": [
                "dismiss_stale_reviews_on_push",
                "require_code_owner_review",
                "require_last_push_approval",
                "required_approving_review_count",
                "required_review_thread_resolution"
            ],
            "type": "object",
            "properties": {
                "dismiss_stale_reviews_on_push": {
                    "type": "boolean",
                    "description": "New, reviewable commits pushed will dismiss previous pull request review approvals."
                },
                "require_code_owner_review": {
                    "type": "boolean",
                    "description": "Require an approving review in pull requests that modify files that have a designated code owner."
                },
                "require_last_push_approval": {
                    "type": "boolean",
                    "description": "Whether the most recent reviewable push must be approved by someone other than the person who pushed it."
                },
                "required_approving_review_count": {
                    "maximum": 10,
                    "minimum": 0,
                    "type": "integer",
                    "description": "The number of approving reviews that are required before a pull request can be merged."
                },
                "required_review_thread_resolution": {
                    "type": "boolean",
                    "description": "All conversations on code must be resolved before a pull request can be merged."
                }
            }
        }
    },
    "description": "Require all commits be made to a non-target branch and submitted via a pull request before they can be merged."
}';
    public const SCHEMA_TITLE        = 'pull_request';
    public const SCHEMA_DESCRIPTION  = 'Require all commits be made to a non-target branch and submitted via a pull request before they can be merged.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "pull_request",
    "parameters": {
        "dismiss_stale_reviews_on_push": false,
        "require_code_owner_review": false,
        "require_last_push_approval": false,
        "required_approving_review_count": 31,
        "required_review_thread_resolution": false
    }
}';

    public function __construct(public string $type, public Schema\RepositoryRulePullRequest\Parameters|null $parameters)
    {
    }
}
