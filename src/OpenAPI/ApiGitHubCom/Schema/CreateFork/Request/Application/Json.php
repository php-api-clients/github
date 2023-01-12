<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateFork\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"organization":{"type":"string","description":"Optional parameter to specify the organization name if forking into an organization."},"name":{"type":"string","description":"When forking from an existing repository, a new name for the fork."},"default_branch_only":{"type":"boolean","description":"When forking from an existing repository, fork with only the default branch."}}}';
    public const SCHEMA_TITLE = 'CreateFork\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Optional parameter to specify the organization name if forking into an organization.
     */
    private string $organization;
    /**
     * When forking from an existing repository, a new name for the fork.
     */
    private string $name;
    /**
     * When forking from an existing repository, fork with only the default branch.
     */
    private bool $default_branch_only;
    /**
     * Optional parameter to specify the organization name if forking into an organization.
     */
    public function organization() : string
    {
        return $this->organization;
    }
    /**
     * When forking from an existing repository, a new name for the fork.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * When forking from an existing repository, fork with only the default branch.
     */
    public function default_branch_only() : bool
    {
        return $this->default_branch_only;
    }
}
