<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class BranchProtection
{
    public const SCHEMA_TITLE = 'Branch Protection';
    public const SCHEMA_DESCRIPTION = 'Branch Protection';
    private string $url;
    private bool $enabled;
    private array $required_status_checks = array();
    /**
     * Protected Branch Admin Enforced
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\ProtectedBranchAdminEnforced::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\ProtectedBranchAdminEnforced $enforce_admins;
    /**
     * Protected Branch Pull Request Review
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\ProtectedBranchPullRequestReview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\ProtectedBranchPullRequestReview $required_pull_request_reviews;
    /**
     * Branch Restriction Policy
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\BranchRestrictionPolicy::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\BranchRestrictionPolicy $restrictions;
    private array $required_linear_history = array();
    private array $allow_force_pushes = array();
    private array $allow_deletions = array();
    private array $required_conversation_resolution = array();
    private string $name;
    private string $protection_url;
    private array $required_signatures = array();
    public function url() : string
    {
        return $this->url;
    }
    public function enabled() : bool
    {
        return $this->enabled;
    }
    public function required_status_checks() : array
    {
        return $this->required_status_checks;
    }
    /**
     * Protected Branch Admin Enforced
     */
    public function enforce_admins() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\ProtectedBranchAdminEnforced
    {
        return $this->enforce_admins;
    }
    /**
     * Protected Branch Pull Request Review
     */
    public function required_pull_request_reviews() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\ProtectedBranchPullRequestReview
    {
        return $this->required_pull_request_reviews;
    }
    /**
     * Branch Restriction Policy
     */
    public function restrictions() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\BranchRestrictionPolicy
    {
        return $this->restrictions;
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
    public function required_conversation_resolution() : array
    {
        return $this->required_conversation_resolution;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function protection_url() : string
    {
        return $this->protection_url;
    }
    public function required_signatures() : array
    {
        return $this->required_signatures;
    }
}
