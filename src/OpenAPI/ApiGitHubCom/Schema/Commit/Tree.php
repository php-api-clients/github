<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit;

final class Tree
{
    public const SCHEMA_JSON = '{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Commit\\Tree';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $sha;
    public readonly string $url;
    public function __construct(string $sha, string $url)
    {
        $this->sha = $sha;
        $this->url = $url;
    }
}
