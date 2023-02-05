<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag;

final class Object_
{
    public const SCHEMA_JSON = '{"required":["sha","type","url"],"type":"object","properties":{"sha":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'GitTag\\Object';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $sha;
    public readonly string $type;
    public readonly string $url;
    public function __construct(string $sha, string $type, string $url)
    {
        $this->sha = $sha;
        $this->type = $type;
        $this->url = $url;
    }
}
