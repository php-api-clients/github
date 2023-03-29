<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleDeleted;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Rule
{
    public const SCHEMA_JSON = '{"title":"branch protection rule","required":["id","repository_id","name","created_at","updated_at","pull_request_reviews_enforcement_level","required_approving_review_count","dismiss_stale_reviews_on_push","require_code_owner_review","authorized_dismissal_actors_only","ignore_approvals_from_contributors","required_status_checks","required_status_checks_enforcement_level","strict_required_status_checks_policy","signature_requirement_enforcement_level","linear_history_requirement_enforcement_level","admin_enforced","allow_force_pushes_enforcement_level","allow_deletions_enforcement_level","merge_queue_enforcement_level","required_deployments_enforcement_level","required_conversation_resolution_level","authorized_actors_only","authorized_actor_names"],"type":"object","properties":{"admin_enforced":{"type":"boolean"},"allow_deletions_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"allow_force_pushes_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"authorized_actor_names":{"type":"array","items":{"type":"string"}},"authorized_actors_only":{"type":"boolean"},"authorized_dismissal_actors_only":{"type":"boolean"},"create_protected":{"type":"boolean"},"created_at":{"type":"string","format":"date-time"},"dismiss_stale_reviews_on_push":{"type":"boolean"},"id":{"type":"integer"},"ignore_approvals_from_contributors":{"type":"boolean"},"linear_history_requirement_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"merge_queue_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"name":{"type":"string"},"pull_request_reviews_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"repository_id":{"type":"integer"},"require_code_owner_review":{"type":"boolean"},"required_approving_review_count":{"type":"integer"},"required_conversation_resolution_level":{"enum":["off","non_admins","everyone"],"type":"string"},"required_deployments_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"required_status_checks":{"type":"array","items":{"type":"string"}},"required_status_checks_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"signature_requirement_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"strict_required_status_checks_policy":{"type":"boolean"},"updated_at":{"type":"string","format":"date-time"}},"description":"The branch protection rule. Includes a `name` and all the [branch protection settings](https:\\/\\/docs.github.com\\/github\\/administering-a-repository\\/defining-the-mergeability-of-pull-requests\\/about-protected-branches#about-branch-protection-settings) applied to branches that match the name. Binary settings are boolean. Multi-level configurations are one of `off`, `non_admins`, or `everyone`. Actor and build lists are arrays of strings."}';
    public const SCHEMA_TITLE = 'branch protection rule';
    public const SCHEMA_DESCRIPTION = 'The branch protection rule. Includes a `name` and all the [branch protection settings](https://docs.github.com/github/administering-a-repository/defining-the-mergeability-of-pull-requests/about-protected-branches#about-branch-protection-settings) applied to branches that match the name. Binary settings are boolean. Multi-level configurations are one of `off`, `non_admins`, or `everyone`. Actor and build lists are arrays of strings.';
    public const SCHEMA_EXAMPLE_DATA = '{"admin_enforced":false,"allow_deletions_enforcement_level":"off","allow_force_pushes_enforcement_level":"off","authorized_actor_names":["generated_authorized_actor_names_null"],"authorized_actors_only":false,"authorized_dismissal_actors_only":false,"create_protected":false,"created_at":"1970-01-01T00:00:00+00:00","dismiss_stale_reviews_on_push":false,"id":13,"ignore_approvals_from_contributors":false,"linear_history_requirement_enforcement_level":"off","merge_queue_enforcement_level":"off","name":"generated_name_null","pull_request_reviews_enforcement_level":"off","repository_id":13,"require_code_owner_review":false,"required_approving_review_count":13,"required_conversation_resolution_level":"off","required_deployments_enforcement_level":"off","required_status_checks":["generated_required_status_checks_null"],"required_status_checks_enforcement_level":"off","signature_requirement_enforcement_level":"off","strict_required_status_checks_policy":false,"updated_at":"1970-01-01T00:00:00+00:00"}';
    /**
     * @param array<string> $authorizedActorNames
     * @param array<string> $requiredStatusChecks
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('admin_enforced')] public bool $adminEnforced, #[\EventSauce\ObjectHydrator\MapFrom('allow_deletions_enforcement_level')] public string $allowDeletionsEnforcementLevel, #[\EventSauce\ObjectHydrator\MapFrom('allow_force_pushes_enforcement_level')] public string $allowForcePushesEnforcementLevel, #[\EventSauce\ObjectHydrator\MapFrom('authorized_actor_names')] public array $authorizedActorNames, #[\EventSauce\ObjectHydrator\MapFrom('authorized_actors_only')] public bool $authorizedActorsOnly, #[\EventSauce\ObjectHydrator\MapFrom('authorized_dismissal_actors_only')] public bool $authorizedDismissalActorsOnly, #[\EventSauce\ObjectHydrator\MapFrom('create_protected')] public ?bool $createProtected, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('dismiss_stale_reviews_on_push')] public bool $dismissStaleReviewsOnPush, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('ignore_approvals_from_contributors')] public bool $ignoreApprovalsFromContributors, #[\EventSauce\ObjectHydrator\MapFrom('linear_history_requirement_enforcement_level')] public string $linearHistoryRequirementEnforcementLevel, #[\EventSauce\ObjectHydrator\MapFrom('merge_queue_enforcement_level')] public string $mergeQueueEnforcementLevel, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('pull_request_reviews_enforcement_level')] public string $pullRequestReviewsEnforcementLevel, #[\EventSauce\ObjectHydrator\MapFrom('repository_id')] public int $repositoryId, #[\EventSauce\ObjectHydrator\MapFrom('require_code_owner_review')] public bool $requireCodeOwnerReview, #[\EventSauce\ObjectHydrator\MapFrom('required_approving_review_count')] public int $requiredApprovingReviewCount, #[\EventSauce\ObjectHydrator\MapFrom('required_conversation_resolution_level')] public string $requiredConversationResolutionLevel, #[\EventSauce\ObjectHydrator\MapFrom('required_deployments_enforcement_level')] public string $requiredDeploymentsEnforcementLevel, #[\EventSauce\ObjectHydrator\MapFrom('required_status_checks')] public array $requiredStatusChecks, #[\EventSauce\ObjectHydrator\MapFrom('required_status_checks_enforcement_level')] public string $requiredStatusChecksEnforcementLevel, #[\EventSauce\ObjectHydrator\MapFrom('signature_requirement_enforcement_level')] public string $signatureRequirementEnforcementLevel, #[\EventSauce\ObjectHydrator\MapFrom('strict_required_status_checks_policy')] public bool $strictRequiredStatusChecksPolicy, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt)
    {
    }
}
