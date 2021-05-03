<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ProtectedBranch
{
    public const SCHEMA_TITLE = 'Protected Branch';
    public const SPL_HASH = '0000000031ee5f9300000000484d7fbe';
    public const SCHEMA_DESCRIPTION = 'Branch protections protect branches';
    private string $url;
    /**
     * Status Check Policy
     */
    private object $required_status_checks;
    private object $required_pull_request_reviews;
    private object $required_signatures;
    private object $enforce_admins;
    private object $required_linear_history;
    private object $allow_force_pushes;
    private object $allow_deletions;
    /**
     * Branch Restriction Policy
     */
    private object $restrictions;
    private object $required_conversation_resolution;
    public function url() : string
    {
        return $this->url;
    }
    public function required_status_checks() : object
    {
        return $this->required_status_checks;
    }
    public function required_pull_request_reviews() : object
    {
        return $this->required_pull_request_reviews;
    }
    public function required_signatures() : object
    {
        return $this->required_signatures;
    }
    public function enforce_admins() : object
    {
        return $this->enforce_admins;
    }
    public function required_linear_history() : object
    {
        return $this->required_linear_history;
    }
    public function allow_force_pushes() : object
    {
        return $this->allow_force_pushes;
    }
    public function allow_deletions() : object
    {
        return $this->allow_deletions;
    }
    public function restrictions() : object
    {
        return $this->restrictions;
    }
    public function required_conversation_resolution() : object
    {
        return $this->required_conversation_resolution;
    }
}
