<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class BranchProtectionRule
{
    public const SCHEMA_TITLE = 'branch protection rule';
    public const SCHEMA_DESCRIPTION = 'The branch protection rule. Includes a `name` and all the [branch protection settings](https://docs.github.com/en/github/administering-a-repository/defining-the-mergeability-of-pull-requests/about-protected-branches#about-branch-protection-settings) applied to branches that match the name. Binary settings are boolean. Multi-level configurations are one of `off`, `non_admins`, or `everyone`. Actor and build lists are arrays of strings.';
    private int $id;
    private int $repository_id;
    private string $name;
    private string $created_at;
    private string $updated_at;
    private string $pull_request_reviews_enforcement_level;
    private int $required_approving_review_count;
    private bool $dismiss_stale_reviews_on_push;
    private bool $require_code_owner_review;
    private bool $authorized_dismissal_actors_only;
    private bool $ignore_approvals_from_contributors;
    private array $required_status_checks = array();
    private string $required_status_checks_enforcement_level;
    private bool $strict_required_status_checks_policy;
    private string $signature_requirement_enforcement_level;
    private string $linear_history_requirement_enforcement_level;
    private bool $admin_enforced;
    private string $allow_force_pushes_enforcement_level;
    private string $allow_deletions_enforcement_level;
    private string $merge_queue_enforcement_level;
    private string $required_deployments_enforcement_level;
    private string $required_conversation_resolution_level;
    private bool $authorized_actors_only;
    private array $authorized_actor_names = array();
    public function id() : int
    {
        return $this->id;
    }
    public function repository_id() : int
    {
        return $this->repository_id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function pull_request_reviews_enforcement_level() : string
    {
        return $this->pull_request_reviews_enforcement_level;
    }
    public function required_approving_review_count() : int
    {
        return $this->required_approving_review_count;
    }
    public function dismiss_stale_reviews_on_push() : bool
    {
        return $this->dismiss_stale_reviews_on_push;
    }
    public function require_code_owner_review() : bool
    {
        return $this->require_code_owner_review;
    }
    public function authorized_dismissal_actors_only() : bool
    {
        return $this->authorized_dismissal_actors_only;
    }
    public function ignore_approvals_from_contributors() : bool
    {
        return $this->ignore_approvals_from_contributors;
    }
    public function required_status_checks() : array
    {
        return $this->required_status_checks;
    }
    public function required_status_checks_enforcement_level() : string
    {
        return $this->required_status_checks_enforcement_level;
    }
    public function strict_required_status_checks_policy() : bool
    {
        return $this->strict_required_status_checks_policy;
    }
    public function signature_requirement_enforcement_level() : string
    {
        return $this->signature_requirement_enforcement_level;
    }
    public function linear_history_requirement_enforcement_level() : string
    {
        return $this->linear_history_requirement_enforcement_level;
    }
    public function admin_enforced() : bool
    {
        return $this->admin_enforced;
    }
    public function allow_force_pushes_enforcement_level() : string
    {
        return $this->allow_force_pushes_enforcement_level;
    }
    public function allow_deletions_enforcement_level() : string
    {
        return $this->allow_deletions_enforcement_level;
    }
    public function merge_queue_enforcement_level() : string
    {
        return $this->merge_queue_enforcement_level;
    }
    public function required_deployments_enforcement_level() : string
    {
        return $this->required_deployments_enforcement_level;
    }
    public function required_conversation_resolution_level() : string
    {
        return $this->required_conversation_resolution_level;
    }
    public function authorized_actors_only() : bool
    {
        return $this->authorized_actors_only;
    }
    public function authorized_actor_names() : array
    {
        return $this->authorized_actor_names;
    }
}
