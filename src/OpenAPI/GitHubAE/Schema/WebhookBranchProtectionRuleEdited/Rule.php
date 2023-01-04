<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookBranchProtectionRuleEdited;

final class Rule
{
    public const SCHEMA_JSON = '{"title":"branch protection rule","required":["id","repository_id","name","created_at","updated_at","pull_request_reviews_enforcement_level","required_approving_review_count","dismiss_stale_reviews_on_push","require_code_owner_review","authorized_dismissal_actors_only","ignore_approvals_from_contributors","required_status_checks","required_status_checks_enforcement_level","strict_required_status_checks_policy","signature_requirement_enforcement_level","linear_history_requirement_enforcement_level","admin_enforced","allow_force_pushes_enforcement_level","allow_deletions_enforcement_level","merge_queue_enforcement_level","required_deployments_enforcement_level","required_conversation_resolution_level","authorized_actors_only","authorized_actor_names"],"type":"object","properties":{"admin_enforced":{"type":"boolean"},"allow_deletions_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"allow_force_pushes_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"authorized_actor_names":{"type":"array","items":{"type":"string"}},"authorized_actors_only":{"type":"boolean"},"authorized_dismissal_actors_only":{"type":"boolean"},"create_protected":{"type":"boolean"},"created_at":{"type":"string","format":"date-time"},"dismiss_stale_reviews_on_push":{"type":"boolean"},"id":{"type":"integer"},"ignore_approvals_from_contributors":{"type":"boolean"},"linear_history_requirement_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"merge_queue_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"name":{"type":"string"},"pull_request_reviews_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"repository_id":{"type":"integer"},"require_code_owner_review":{"type":"boolean"},"required_approving_review_count":{"type":"integer"},"required_conversation_resolution_level":{"enum":["off","non_admins","everyone"],"type":"string"},"required_deployments_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"required_status_checks":{"type":"array","items":{"type":"string"}},"required_status_checks_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"signature_requirement_enforcement_level":{"enum":["off","non_admins","everyone"],"type":"string"},"strict_required_status_checks_policy":{"type":"boolean"},"updated_at":{"type":"string","format":"date-time"}},"description":"The branch protection rule. Includes a `name` and all the [branch protection settings](https:\\/\\/docs.github.com\\/github-ae@latest\\/github\\/administering-a-repository\\/defining-the-mergeability-of-pull-requests\\/about-protected-branches#about-branch-protection-settings) applied to branches that match the name. Binary settings are boolean. Multi-level configurations are one of `off`, `non_admins`, or `everyone`. Actor and build lists are arrays of strings."}';
    public const SCHEMA_TITLE = 'branch protection rule';
    public const SCHEMA_DESCRIPTION = 'The branch protection rule. Includes a `name` and all the [branch protection settings](https://docs.github.com/github-ae@latest/github/administering-a-repository/defining-the-mergeability-of-pull-requests/about-protected-branches#about-branch-protection-settings) applied to branches that match the name. Binary settings are boolean. Multi-level configurations are one of `off`, `non_admins`, or `everyone`. Actor and build lists are arrays of strings.';
    private bool $admin_enforced;
    private string $allow_deletions_enforcement_level;
    private string $allow_force_pushes_enforcement_level;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Rule\AuthorizedActorNames>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Rule\AuthorizedActorNames::class)
     */
    private array $authorized_actor_names = array();
    private bool $authorized_actors_only;
    private bool $authorized_dismissal_actors_only;
    private ?bool $create_protected = null;
    private string $created_at;
    private bool $dismiss_stale_reviews_on_push;
    private int $id;
    private bool $ignore_approvals_from_contributors;
    private string $linear_history_requirement_enforcement_level;
    private string $merge_queue_enforcement_level;
    private string $name;
    private string $pull_request_reviews_enforcement_level;
    private int $repository_id;
    private bool $require_code_owner_review;
    private int $required_approving_review_count;
    private string $required_conversation_resolution_level;
    private string $required_deployments_enforcement_level;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Rule\RequiredStatusChecks>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Rule\RequiredStatusChecks::class)
     */
    private array $required_status_checks = array();
    private string $required_status_checks_enforcement_level;
    private string $signature_requirement_enforcement_level;
    private bool $strict_required_status_checks_policy;
    private string $updated_at;
    public function admin_enforced() : bool
    {
        return $this->admin_enforced;
    }
    public function allow_deletions_enforcement_level() : string
    {
        return $this->allow_deletions_enforcement_level;
    }
    public function allow_force_pushes_enforcement_level() : string
    {
        return $this->allow_force_pushes_enforcement_level;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Rule\AuthorizedActorNames>
     */
    public function authorized_actor_names() : array
    {
        return $this->authorized_actor_names;
    }
    public function authorized_actors_only() : bool
    {
        return $this->authorized_actors_only;
    }
    public function authorized_dismissal_actors_only() : bool
    {
        return $this->authorized_dismissal_actors_only;
    }
    public function create_protected() : ?bool
    {
        return $this->create_protected;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function dismiss_stale_reviews_on_push() : bool
    {
        return $this->dismiss_stale_reviews_on_push;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function ignore_approvals_from_contributors() : bool
    {
        return $this->ignore_approvals_from_contributors;
    }
    public function linear_history_requirement_enforcement_level() : string
    {
        return $this->linear_history_requirement_enforcement_level;
    }
    public function merge_queue_enforcement_level() : string
    {
        return $this->merge_queue_enforcement_level;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function pull_request_reviews_enforcement_level() : string
    {
        return $this->pull_request_reviews_enforcement_level;
    }
    public function repository_id() : int
    {
        return $this->repository_id;
    }
    public function require_code_owner_review() : bool
    {
        return $this->require_code_owner_review;
    }
    public function required_approving_review_count() : int
    {
        return $this->required_approving_review_count;
    }
    public function required_conversation_resolution_level() : string
    {
        return $this->required_conversation_resolution_level;
    }
    public function required_deployments_enforcement_level() : string
    {
        return $this->required_deployments_enforcement_level;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Rule\RequiredStatusChecks>
     */
    public function required_status_checks() : array
    {
        return $this->required_status_checks;
    }
    public function required_status_checks_enforcement_level() : string
    {
        return $this->required_status_checks_enforcement_level;
    }
    public function signature_requirement_enforcement_level() : string
    {
        return $this->signature_requirement_enforcement_level;
    }
    public function strict_required_status_checks_policy() : bool
    {
        return $this->strict_required_status_checks_policy;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
