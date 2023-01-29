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
    public readonly string $organization;
    /**
     * When forking from an existing repository, a new name for the fork.
     */
    public readonly string $name;
    /**
     * When forking from an existing repository, fork with only the default branch.
     */
    public readonly bool $default_branch_only;
    public function __construct(string $organization, string $name, bool $default_branch_only)
    {
        $this->organization = $organization;
        $this->name = $name;
        $this->default_branch_only = $default_branch_only;
    }
}
