<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class BranchProtection
{
    public const SCHEMA_TITLE = 'Branch Protection';
    public const SCHEMA_DESCRIPTION = 'Branch Protection';
    private ?string $url = null;
    private array $required_status_checks = array();
    /**
     * Protected Branch Admin Enforced
     */
    private array $enforce_admins = array();
    /**
     * Protected Branch Pull Request Review
     */
    private array $required_pull_request_reviews = array();
    /**
     * Branch Restriction Policy
     */
    private array $restrictions = array();
    private array $required_linear_history = array();
    private array $allow_force_pushes = array();
    private array $allow_deletions = array();
    private array $required_conversation_resolution = array();
    private ?string $name = null;
    private ?string $protection_url = null;
    private array $required_signatures = array();
    public function url() : ?string
    {
        return $this->url;
    }
    public function required_status_checks() : array
    {
        return $this->required_status_checks;
    }
    public function enforce_admins() : array
    {
        return $this->enforce_admins;
    }
    public function required_pull_request_reviews() : array
    {
        return $this->required_pull_request_reviews;
    }
    public function restrictions() : array
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
    public function name() : ?string
    {
        return $this->name;
    }
    public function protection_url() : ?string
    {
        return $this->protection_url;
    }
    public function required_signatures() : array
    {
        return $this->required_signatures;
    }
}
