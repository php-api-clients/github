<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranch;

final class AllowForcePushes
{
    public const SCHEMA_JSON = '{"required":["enabled"],"type":"object","properties":{"enabled":{"type":"boolean"}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'ProtectedBranch\\AllowForcePushes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly bool $enabled;
    public function __construct(bool $enabled)
    {
        $this->enabled = $enabled;
    }
}
