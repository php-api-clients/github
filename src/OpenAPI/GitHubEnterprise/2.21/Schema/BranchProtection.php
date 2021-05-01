<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Schema;

final class BranchProtection
{
    public const SCHEMA_TITLE = 'Branch Protection';
    public const SCHEMA_DESCRIPTION = 'Branch Protection';
    private string $url;
    private object $required_status_checks;
    /**Protected Branch Admin Enforced**/
    private object $enforce_admins;
    /**Protected Branch Pull Request Review**/
    private object $required_pull_request_reviews;
    /**Branch Restriction Policy**/
    private object $restrictions;
    private object $required_linear_history;
    private object $allow_force_pushes;
    private object $allow_deletions;
    private object $required_conversation_resolution;
    private string $name;
    private string $protection_url;
    private object $required_signatures;
    public function url() : string
    {
        return $this->url;
    }
    public function required_status_checks() : object
    {
        return $this->required_status_checks;
    }
    public function enforce_admins() : object
    {
        return $this->enforce_admins;
    }
    public function required_pull_request_reviews() : object
    {
        return $this->required_pull_request_reviews;
    }
    public function restrictions() : object
    {
        return $this->restrictions;
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
    public function required_conversation_resolution() : object
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
    public function required_signatures() : object
    {
        return $this->required_signatures;
    }
}
