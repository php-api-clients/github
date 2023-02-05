<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranch;

final class LockBranch
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean","default":false}},"description":"Whether to set the branch as read-only. If this is true, users will not be able to push to the branch.","additionalProperties":false}';
    public const SCHEMA_TITLE = 'ProtectedBranch\\LockBranch';
    public const SCHEMA_DESCRIPTION = 'Whether to set the branch as read-only. If this is true, users will not be able to push to the branch.';
    public readonly bool $enabled;
    public function __construct(bool $enabled)
    {
        $this->enabled = $enabled;
    }
}
