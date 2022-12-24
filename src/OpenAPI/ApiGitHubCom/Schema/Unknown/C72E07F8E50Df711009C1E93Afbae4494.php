<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C72E07F8E50Df711009C1E93Afbae4494
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean","default":false}},"description":"Whether to set the branch as read-only. If this is true, users will not be able to push to the branch."}';
    public const SCHEMA_TITLE = 'c_72e07f8e50df711009c1e93afbae4494';
    public const SCHEMA_DESCRIPTION = 'Whether to set the branch as read-only. If this is true, users will not be able to push to the branch.';
    private bool $enabled;
    public function enabled() : bool
    {
        return $this->enabled;
    }
}
