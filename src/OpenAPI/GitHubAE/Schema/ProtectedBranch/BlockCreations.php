<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranch;

final class BlockCreations
{
    public const SCHEMA_JSON = '{"required":["enabled"],"type":"object","properties":{"enabled":{"type":"boolean"}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'ProtectedBranch\\BlockCreations';
    public const SCHEMA_DESCRIPTION = '';
    private bool $enabled;
    public function enabled() : bool
    {
        return $this->enabled;
    }
}
