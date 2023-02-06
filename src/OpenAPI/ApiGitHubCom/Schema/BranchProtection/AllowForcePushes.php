<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchProtection;

final class AllowForcePushes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'BranchProtection\\AllowForcePushes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly bool $enabled;
    public function __construct(bool $enabled)
    {
        $this->enabled = $enabled;
    }
}
