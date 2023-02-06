<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ShortBranch;

final class Commit
{
    public const SCHEMA_JSON = '{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'ShortBranch\\Commit';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $sha;
    public readonly string $url;
    public function __construct(string $sha, string $url)
    {
        $this->sha = $sha;
        $this->url = $url;
    }
}
