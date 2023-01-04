<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BranchProtection;

final class RequiredSignatures
{
    public const SCHEMA_JSON = '{"required":["url","enabled"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_signatures"]},"enabled":{"type":"boolean","examples":[true]}}}';
    public const SCHEMA_TITLE = 'BranchProtection\\RequiredSignatures';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private bool $enabled;
    public function url() : string
    {
        return $this->url;
    }
    public function enabled() : bool
    {
        return $this->enabled;
    }
}
