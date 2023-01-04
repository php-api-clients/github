<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BranchProtection;

final class AllowDeletions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'BranchProtection\\AllowDeletions';
    public const SCHEMA_DESCRIPTION = '';
    private bool $enabled;
    public function enabled() : bool
    {
        return $this->enabled;
    }
}
