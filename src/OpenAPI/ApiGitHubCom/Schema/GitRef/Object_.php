<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef;

final class Object_
{
    public const SCHEMA_JSON = '{"required":["type","sha","url"],"type":"object","properties":{"type":{"type":"string"},"sha":{"maxLength":40,"minLength":40,"type":"string","description":"SHA for the reference","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'GitRef\\Object';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $type;
    /**
     * SHA for the reference
     */
    public readonly string $sha;
    public readonly string $url;
    public function __construct(string $type, string $sha, string $url)
    {
        $this->type = $type;
        $this->sha = $sha;
        $this->url = $url;
    }
}
