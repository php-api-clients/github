<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranch;

final class RequiredSignatures
{
    public const SCHEMA_JSON = '{"required":["url","enabled"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_signatures"]},"enabled":{"type":"boolean","examples":[true]}}}';
    public const SCHEMA_TITLE = 'ProtectedBranch\\RequiredSignatures';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $url;
    public readonly bool $enabled;
    public function __construct(string $url, bool $enabled)
    {
        $this->url = $url;
        $this->enabled = $enabled;
    }
}
