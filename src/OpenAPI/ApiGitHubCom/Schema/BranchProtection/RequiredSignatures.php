<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchProtection;

final class RequiredSignatures
{
    public const SCHEMA_JSON = '{"required":["url","enabled"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_signatures"]},"enabled":{"type":"boolean","examples":[true]}}}';
    public const SCHEMA_EXAMPLE = '{"url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_signatures","enabled":true}';
    public const SCHEMA_TITLE = 'BranchProtection\\RequiredSignatures';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $url;
    public readonly bool $enabled;
    public function __construct(string $url, bool $enabled)
    {
        $this->url = $url;
        $this->enabled = $enabled;
    }
}
