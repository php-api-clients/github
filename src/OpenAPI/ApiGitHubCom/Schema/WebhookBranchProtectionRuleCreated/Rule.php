<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookBranchProtectionRuleCreated;

final readonly class Rule
{
    public const SCHEMA_JSON        = '{"title":"branch protection rule","required":["id","repository_id","name","created_at","updated_at","pull_request_reviews_enforcement_level","required_approving_review_count","dismiss_stale_reviews_on_push","require_code_owner_review","authorized_dismissal_actors_only","ignore_approvals_from_contributors","required_status_checks","required_status_checks_enforcement_level","strict_required_status_checks_policy","signature_requirement_enforcement_level","linear_history_requirement_enforcement_level","admin_enforced","allow_force_pushes_enforcement_level","allow_deletions_enforcement_level","merge_queue_enforcement_level","required_deployments_enforcement_level","required_conversation_resolution_level","authorized_actors_only","authorized_actor_names"],"type":"object","properties":{"admin_enforced":{"type":"boolean"},"allow_deletions_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"allow_force_pushes_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"authorized_actor_names":{"type":"array","items":{"type":"string"}},"authorized_actors_only":{"type":"boolean"},"authorized_dismissal_actors_only":{"type":"boolean"},"create_protected":{"type":"boolean"},"created_at":{"type":"string","format":"date-time"},"dismiss_stale_reviews_on_push":{"type":"boolean"},"id":{"type":"integer"},"ignore_approvals_from_contributors":{"type":"boolean"},"linear_history_requirement_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"merge_queue_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"name":{"type":"string"},"pull_request_reviews_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"repository_id":{"type":"integer"},"require_code_owner_review":{"type":"boolean"},"required_approving_review_count":{"type":"integer"},"required_conversation_resolution_level":{"enum":["off","non_admins","everyone"],"type":"string"},"required_deployments_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"required_status_checks":{"type":"array","items":{"type":"string"}},"required_status_checks_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"signature_requirement_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"strict_required_status_checks_policy":{"type":"boolean"},"updated_at":{"type":"string","format":"date-time"}},"description":"The branch protection rule. Includes a `name` and all the [branch protection settings](https:\\/\\/docs.github.com\\/github\\/administering-a-repository\\/defining-the-mergeability-of-pull-requests\\/about-protected-branches#about-branch-protection-settings) applied to branches that match the name. Binary settings are boolean. Multi-level configurations are one of `off`, `non_admins`, or `everyone`. Actor and build lists are arrays of strings."}';
    public const SCHEMA_TITLE       = 'branch protection rule';
    public const SCHEMA_DESCRIPTION = 'The branch protection rule. Includes a `name` and all the [branch protection settings](https://docs.github.com/github/administering-a-repository/defining-the-mergeability-of-pull-requests/about-protected-branches#about-branch-protection-settings) applied to branches that match the name. Binary settings are boolean. Multi-level configurations are one of `off`, `non_admins`, or `everyone`. Actor and build lists are arrays of strings.';
    public ?bool $admin_enforced;
    public ?string $allow_deletions_enforcement_level;
    public ?string $allow_force_pushes_enforcement_level;
    public ?array $authorized_actor_names;
    public ?bool $authorized_actors_only;
    public ?bool $authorized_dismissal_actors_only;
    public bool $create_protected;
    public ?string $created_at;
    public ?bool $dismiss_stale_reviews_on_push;
    public ?int $id;
    public ?bool $ignore_approvals_from_contributors;
    public ?string $linear_history_requirement_enforcement_level;
    public ?string $merge_queue_enforcement_level;
    public ?string $name;
    public ?string $pull_request_reviews_enforcement_level;
    public ?int $repository_id;
    public ?bool $require_code_owner_review;
    public ?int $required_approving_review_count;
    public ?string $required_conversation_resolution_level;
    public ?string $required_deployments_enforcement_level;
    public ?array $required_status_checks;
    public ?string $required_status_checks_enforcement_level;
    public ?string $signature_requirement_enforcement_level;
    public ?bool $strict_required_status_checks_policy;
    public ?string $updated_at;

    public function __construct(bool $admin_enforced, string $allow_deletions_enforcement_level, string $allow_force_pushes_enforcement_level, array $authorized_actor_names, bool $authorized_actors_only, bool $authorized_dismissal_actors_only, bool $create_protected, string $created_at, bool $dismiss_stale_reviews_on_push, int $id, bool $ignore_approvals_from_contributors, string $linear_history_requirement_enforcement_level, string $merge_queue_enforcement_level, string $name, string $pull_request_reviews_enforcement_level, int $repository_id, bool $require_code_owner_review, int $required_approving_review_count, string $required_conversation_resolution_level, string $required_deployments_enforcement_level, array $required_status_checks, string $required_status_checks_enforcement_level, string $signature_requirement_enforcement_level, bool $strict_required_status_checks_policy, string $updated_at)
    {
        $this->admin_enforced                               = $admin_enforced;
        $this->allow_deletions_enforcement_level            = $allow_deletions_enforcement_level;
        $this->allow_force_pushes_enforcement_level         = $allow_force_pushes_enforcement_level;
        $this->authorized_actor_names                       = $authorized_actor_names;
        $this->authorized_actors_only                       = $authorized_actors_only;
        $this->authorized_dismissal_actors_only             = $authorized_dismissal_actors_only;
        $this->create_protected                             = $create_protected;
        $this->created_at                                   = $created_at;
        $this->dismiss_stale_reviews_on_push                = $dismiss_stale_reviews_on_push;
        $this->id                                           = $id;
        $this->ignore_approvals_from_contributors           = $ignore_approvals_from_contributors;
        $this->linear_history_requirement_enforcement_level = $linear_history_requirement_enforcement_level;
        $this->merge_queue_enforcement_level                = $merge_queue_enforcement_level;
        $this->name                                         = $name;
        $this->pull_request_reviews_enforcement_level       = $pull_request_reviews_enforcement_level;
        $this->repository_id                                = $repository_id;
        $this->require_code_owner_review                    = $require_code_owner_review;
        $this->required_approving_review_count              = $required_approving_review_count;
        $this->required_conversation_resolution_level       = $required_conversation_resolution_level;
        $this->required_deployments_enforcement_level       = $required_deployments_enforcement_level;
        $this->required_status_checks                       = $required_status_checks;
        $this->required_status_checks_enforcement_level     = $required_status_checks_enforcement_level;
        $this->signature_requirement_enforcement_level      = $signature_requirement_enforcement_level;
        $this->strict_required_status_checks_policy         = $strict_required_status_checks_policy;
        $this->updated_at                                   = $updated_at;
    }
}
