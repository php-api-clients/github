<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranch;

final class RequiredLinearHistory
{
    public const SCHEMA_JSON = '{"required":["enabled"],"type":"object","properties":{"enabled":{"type":"boolean"}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'ProtectedBranch\\RequiredLinearHistory';
    public const SCHEMA_DESCRIPTION = '';
    private bool $enabled;
    public function enabled() : bool
    {
        return $this->enabled;
    }
}
