<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRulePullRequest;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Parameters
{
    public const SCHEMA_JSON         = '{
    "required": [
        "dismiss_stale_reviews_on_push",
        "require_code_owner_review",
        "require_last_push_approval",
        "required_approving_review_count",
        "required_review_thread_resolution"
    ],
    "type": "object",
    "properties": {
        "allowed_merge_methods": {
            "type": "array",
            "items": {
                "enum": [
                    "merge",
                    "squash",
                    "rebase"
                ],
                "type": "string"
            },
            "description": "Array of allowed merge methods. Allowed values include `merge`, `squash`, and `rebase`. At least one option must be enabled."
        },
        "automatic_copilot_code_review_enabled": {
            "type": "boolean",
            "description": "> [!NOTE]\\n> `automatic_copilot_code_review_enabled` is in beta and subject to change.\\n\\nAutomatically request review from Copilot for new pull requests, if the author has access to Copilot code review."
        },
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "allowed_merge_methods": [
        "generated",
        "generated"
    ],
    "automatic_copilot_code_review_enabled": false,
    "dismiss_stale_reviews_on_push": false,
    "require_code_owner_review": false,
    "require_last_push_approval": false,
    "required_approving_review_count": 31,
    "required_review_thread_resolution": false
}';

    /**
     * allowedMergeMethods: Array of allowed merge methods. Allowed values include `merge`, `squash`, and `rebase`. At least one option must be enabled.
     * automaticCopilotCodeReviewEnabled: > [!NOTE]
    > `automatic_copilot_code_review_enabled` is in beta and subject to change.

    Automatically request review from Copilot for new pull requests, if the author has access to Copilot code review.
     * dismissStaleReviewsOnPush: New, reviewable commits pushed will dismiss previous pull request review approvals.
     * requireCodeOwnerReview: Require an approving review in pull requests that modify files that have a designated code owner.
     * requireLastPushApproval: Whether the most recent reviewable push must be approved by someone other than the person who pushed it.
     * requiredApprovingReviewCount: The number of approving reviews that are required before a pull request can be merged.
     * requiredReviewThreadResolution: All conversations on code must be resolved before a pull request can be merged.
     */
    public function __construct(#[MapFrom('allowed_merge_methods')]
    public array|null $allowedMergeMethods, #[MapFrom('automatic_copilot_code_review_enabled')]
    public bool|null $automaticCopilotCodeReviewEnabled, #[MapFrom('dismiss_stale_reviews_on_push')]
    public bool $dismissStaleReviewsOnPush, #[MapFrom('require_code_owner_review')]
    public bool $requireCodeOwnerReview, #[MapFrom('require_last_push_approval')]
    public bool $requireLastPushApproval, #[MapFrom('required_approving_review_count')]
    public int $requiredApprovingReviewCount, #[MapFrom('required_review_thread_resolution')]
    public bool $requiredReviewThreadResolution,)
    {
    }
}
