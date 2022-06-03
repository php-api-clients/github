<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ProtectedBranch
{
    public const SCHEMA_TITLE = 'Protected Branch';
    public const SCHEMA_DESCRIPTION = 'Branch protections protect branches';
    private string $url;
    /**
     * Status Check Policy
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\StatusCheckPolicy::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\StatusCheckPolicy $required_status_checks = null;
    private array $required_pull_request_reviews = array();
    private array $required_signatures = array();
    private array $enforce_admins = array();
    private array $required_linear_history = array();
    private array $allow_force_pushes = array();
    private array $allow_deletions = array();
    /**
     * Branch Restriction Policy
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\BranchRestrictionPolicy::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\BranchRestrictionPolicy $restrictions = null;
    private array $required_conversation_resolution = array();
    public function url() : string
    {
        return $this->url;
    }
    /**
     * Status Check Policy
     */
    public function required_status_checks() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\StatusCheckPolicy
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
    public function restrictions() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\BranchRestrictionPolicy
    {
        return $this->restrictions;
    }
    public function required_conversation_resolution() : array
    {
        return $this->required_conversation_resolution;
    }
}
