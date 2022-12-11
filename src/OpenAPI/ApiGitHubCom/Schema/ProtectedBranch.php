<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ProtectedBranch
{
    public const SCHEMA_TITLE = 'Protected Branch';
    public const SCHEMA_DESCRIPTION = 'Branch protections protect branches';
    private string $url;
    /**
     * Status Check Policy
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy $required_status_checks = null;
    private array $required_pull_request_reviews = array();
    private array $required_signatures = array();
    private array $enforce_admins = array();
    private array $required_linear_history = array();
    private array $allow_force_pushes = array();
    private array $allow_deletions = array();
    /**
     * Branch Restriction Policy
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy $restrictions = null;
    private array $required_conversation_resolution = array();
    private array $block_creations = array();
    /**
     * Whether to set the branch as read-only. If this is true, users will not be able to push to the branch.
     */
    private array $lock_branch = array();
    /**
     * Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow fork syncing. Set to `false` to prevent fork syncing.
     */
    private array $allow_fork_syncing = array();
    public function url() : string
    {
        return $this->url;
    }
    /**
     * Status Check Policy
     */
    public function required_status_checks() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy
    {
        return $this->required_status_checks;
    }
    public function required_pull_request_reviews() : array
    {
        return $this->required_pull_request_reviews;
    }
    public function required_signatures() : array
    {
        return $this->required_signatures;
    }
    public function enforce_admins() : array
    {
        return $this->enforce_admins;
    }
    public function required_linear_history() : array
    {
        return $this->required_linear_history;
    }
    public function allow_force_pushes() : array
    {
        return $this->allow_force_pushes;
    }
    public function allow_deletions() : array
    {
        return $this->allow_deletions;
    }
    /**
     * Branch Restriction Policy
     */
    public function restrictions() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy
    {
        return $this->restrictions;
    }
    public function required_conversation_resolution() : array
    {
        return $this->required_conversation_resolution;
    }
    public function block_creations() : array
    {
        return $this->block_creations;
    }
    /**
     * Whether to set the branch as read-only. If this is true, users will not be able to push to the branch.
     */
    public function lock_branch() : array
    {
        return $this->lock_branch;
    }
    /**
     * Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow fork syncing. Set to `false` to prevent fork syncing.
     */
    public function allow_fork_syncing() : array
    {
        return $this->allow_fork_syncing;
    }
}
