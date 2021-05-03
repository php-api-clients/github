<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class BranchProtection
{
    public const SCHEMA_TITLE = 'Branch Protection';
    public const SPL_HASH = '0000000066e6cc790000000066ded04e';
    public const SCHEMA_DESCRIPTION = 'Branch Protection';
    private ?string $url = null;
    private ?object $required_status_checks = null;
    /**
     * Protected Branch Admin Enforced
     */
    private ?object $enforce_admins = null;
    /**
     * Protected Branch Pull Request Review
     */
    private ?object $required_pull_request_reviews = null;
    /**
     * Branch Restriction Policy
     */
    private ?object $restrictions = null;
    private ?object $required_linear_history = null;
    private ?object $allow_force_pushes = null;
    private ?object $allow_deletions = null;
    private ?object $required_conversation_resolution = null;
    private ?string $name = null;
    private ?string $protection_url = null;
    private ?object $required_signatures = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function required_status_checks() : ?object
    {
        return $this->required_status_checks;
    }
    public function enforce_admins() : ?object
    {
        return $this->enforce_admins;
    }
    public function required_pull_request_reviews() : ?object
    {
        return $this->required_pull_request_reviews;
    }
    public function restrictions() : ?object
    {
        return $this->restrictions;
    }
    public function required_linear_history() : ?object
    {
        return $this->required_linear_history;
    }
    public function allow_force_pushes() : ?object
    {
        return $this->allow_force_pushes;
    }
    public function allow_deletions() : ?object
    {
        return $this->allow_deletions;
    }
    public function required_conversation_resolution() : ?object
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
    public function required_signatures() : ?object
    {
        return $this->required_signatures;
    }
}
