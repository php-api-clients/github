<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchProtection;

final class LockBranch
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean","default":false}},"description":"Whether to set the branch as read-only. If this is true, users will not be able to push to the branch."}';
    public const SCHEMA_TITLE = 'BranchProtection\\LockBranch';
    public const SCHEMA_DESCRIPTION = 'Whether to set the branch as read-only. If this is true, users will not be able to push to the branch.';
    private bool $enabled;
    public function enabled() : bool
    {
        return $this->enabled;
    }
}
