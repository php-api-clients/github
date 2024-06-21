<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class WebhooksRule
{
    public const SCHEMA_JSON         = '{
    "title": "branch protection rule",
    "required": [
        "id",
        "repository_id",
        "name",
        "created_at",
        "updated_at",
        "pull_request_reviews_enforcement_level",
        "required_approving_review_count",
        "dismiss_stale_reviews_on_push",
        "require_code_owner_review",
        "authorized_dismissal_actors_only",
        "ignore_approvals_from_contributors",
        "required_status_checks",
        "required_status_checks_enforcement_level",
        "strict_required_status_checks_policy",
        "signature_requirement_enforcement_level",
        "linear_history_requirement_enforcement_level",
        "lock_branch_enforcement_level",
        "admin_enforced",
        "allow_force_pushes_enforcement_level",
        "allow_deletions_enforcement_level",
        "merge_queue_enforcement_level",
        "required_deployments_enforcement_level",
        "required_conversation_resolution_level",
        "authorized_actors_only",
        "authorized_actor_names"
    ],
    "type": "object",
    "properties": {
        "admin_enforced": {
            "type": "boolean"
        },
        "allow_deletions_enforcement_level": {
            "enum": [
                "off",
                "non_admins",
                "everyone"
            ],
            "type": "string"
        },
        "allow_force_pushes_enforcement_level": {
            "enum": [
                "off",
                "non_admins",
                "everyone"
            ],
            "type": "string"
        },
        "authorized_actor_names": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "authorized_actors_only": {
            "type": "boolean"
        },
        "authorized_dismissal_actors_only": {
            "type": "boolean"
        },
        "create_protected": {
            "type": "boolean"
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "dismiss_stale_reviews_on_push": {
            "type": "boolean"
        },
        "id": {
            "type": "integer"
        },
        "ignore_approvals_from_contributors": {
            "type": "boolean"
        },
        "linear_history_requirement_enforcement_level": {
            "enum": [
                "off",
                "non_admins",
                "everyone"
            ],
            "type": "string"
        },
        "lock_branch_enforcement_level": {
            "enum": [
                "off",
                "non_admins",
                "everyone"
            ],
            "type": "string",
            "description": "The enforcement level of the branch lock setting. `off` means the branch is not locked, `non_admins` means the branch is read-only for non_admins, and `everyone` means the branch is read-only for everyone."
        },
        "lock_allows_fork_sync": {
            "type": "boolean",
            "description": "Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow users to pull changes from upstream when the branch is locked. This setting is only applicable for forks."
        },
        "merge_queue_enforcement_level": {
            "enum": [
                "off",
                "non_admins",
                "everyone"
            ],
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "pull_request_reviews_enforcement_level": {
            "enum": [
                "off",
                "non_admins",
                "everyone"
            ],
            "type": "string"
        },
        "repository_id": {
            "type": "integer"
        },
        "require_code_owner_review": {
            "type": "boolean"
        },
        "require_last_push_approval": {
            "type": "boolean",
            "description": "Whether the most recent push must be approved by someone other than the person who pushed it"
        },
        "required_approving_review_count": {
            "type": "integer"
        },
        "required_conversation_resolution_level": {
            "enum": [
                "off",
                "non_admins",
                "everyone"
            ],
            "type": "string"
        },
        "required_deployments_enforcement_level": {
            "enum": [
                "off",
                "non_admins",
                "everyone"
            ],
            "type": "string"
        },
        "required_status_checks": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "required_status_checks_enforcement_level": {
            "enum": [
                "off",
                "non_admins",
                "everyone"
            ],
            "type": "string"
        },
        "signature_requirement_enforcement_level": {
            "enum": [
                "off",
                "non_admins",
                "everyone"
            ],
            "type": "string"
        },
        "strict_required_status_checks_policy": {
            "type": "boolean"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        }
    },
    "description": "The branch protection rule. Includes a `name` and all the [branch protection settings](https:\\/\\/docs.github.com\\/github\\/administering-a-repository\\/defining-the-mergeability-of-pull-requests\\/about-protected-branches#about-branch-protection-settings) applied to branches that match the name. Binary settings are boolean. Multi-level configurations are one of `off`, `non_admins`, or `everyone`. Actor and build lists are arrays of strings."
}';
    public const SCHEMA_TITLE        = 'branch protection rule';
    public const SCHEMA_DESCRIPTION  = 'The branch protection rule. Includes a `name` and all the [branch protection settings](https://docs.github.com/github/administering-a-repository/defining-the-mergeability-of-pull-requests/about-protected-branches#about-branch-protection-settings) applied to branches that match the name. Binary settings are boolean. Multi-level configurations are one of `off`, `non_admins`, or `everyone`. Actor and build lists are arrays of strings.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "admin_enforced": false,
    "allow_deletions_enforcement_level": "off",
    "allow_force_pushes_enforcement_level": "everyone",
    "authorized_actor_names": [
        "generated",
        "generated"
    ],
    "authorized_actors_only": false,
    "authorized_dismissal_actors_only": false,
    "create_protected": false,
    "created_at": "1970-01-01T00:00:00+00:00",
    "dismiss_stale_reviews_on_push": false,
    "id": 2,
    "ignore_approvals_from_contributors": false,
    "linear_history_requirement_enforcement_level": "everyone",
    "lock_branch_enforcement_level": "off",
    "lock_allows_fork_sync": false,
    "merge_queue_enforcement_level": "off",
    "name": "generated",
    "pull_request_reviews_enforcement_level": "everyone",
    "repository_id": 13,
    "require_code_owner_review": false,
    "require_last_push_approval": false,
    "required_approving_review_count": 31,
    "required_conversation_resolution_level": "everyone",
    "required_deployments_enforcement_level": "everyone",
    "required_status_checks": [
        "generated",
        "generated"
    ],
    "required_status_checks_enforcement_level": "everyone",
    "signature_requirement_enforcement_level": "off",
    "strict_required_status_checks_policy": false,
    "updated_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * lockBranchEnforcementLevel: The enforcement level of the branch lock setting. `off` means the branch is not locked, `non_admins` means the branch is read-only for non_admins, and `everyone` means the branch is read-only for everyone.
     * lockAllowsForkSync: Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow users to pull changes from upstream when the branch is locked. This setting is only applicable for forks.
     * requireLastPushApproval: Whether the most recent push must be approved by someone other than the person who pushed it
     */
    public function __construct(#[MapFrom('admin_enforced')]
    public bool $adminEnforced, #[MapFrom('allow_deletions_enforcement_level')]
    public string $allowDeletionsEnforcementLevel, #[MapFrom('allow_force_pushes_enforcement_level')]
    public string $allowForcePushesEnforcementLevel, #[MapFrom('authorized_actor_names')]
    public array $authorizedActorNames, #[MapFrom('authorized_actors_only')]
    public bool $authorizedActorsOnly, #[MapFrom('authorized_dismissal_actors_only')]
    public bool $authorizedDismissalActorsOnly, #[MapFrom('create_protected')]
    public bool|null $createProtected, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('dismiss_stale_reviews_on_push')]
    public bool $dismissStaleReviewsOnPush, public int $id, #[MapFrom('ignore_approvals_from_contributors')]
    public bool $ignoreApprovalsFromContributors, #[MapFrom('linear_history_requirement_enforcement_level')]
    public string $linearHistoryRequirementEnforcementLevel, #[MapFrom('lock_branch_enforcement_level')]
    public string $lockBranchEnforcementLevel, #[MapFrom('lock_allows_fork_sync')]
    public bool|null $lockAllowsForkSync, #[MapFrom('merge_queue_enforcement_level')]
    public string $mergeQueueEnforcementLevel, public string $name, #[MapFrom('pull_request_reviews_enforcement_level')]
    public string $pullRequestReviewsEnforcementLevel, #[MapFrom('repository_id')]
    public int $repositoryId, #[MapFrom('require_code_owner_review')]
    public bool $requireCodeOwnerReview, #[MapFrom('require_last_push_approval')]
    public bool|null $requireLastPushApproval, #[MapFrom('required_approving_review_count')]
    public int $requiredApprovingReviewCount, #[MapFrom('required_conversation_resolution_level')]
    public string $requiredConversationResolutionLevel, #[MapFrom('required_deployments_enforcement_level')]
    public string $requiredDeploymentsEnforcementLevel, #[MapFrom('required_status_checks')]
    public array $requiredStatusChecks, #[MapFrom('required_status_checks_enforcement_level')]
    public string $requiredStatusChecksEnforcementLevel, #[MapFrom('signature_requirement_enforcement_level')]
    public string $signatureRequirementEnforcementLevel, #[MapFrom('strict_required_status_checks_policy')]
    public bool $strictRequiredStatusChecksPolicy, #[MapFrom('updated_at')]
    public string $updatedAt,)
    {
    }
}
