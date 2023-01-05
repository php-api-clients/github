<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Tag;

final class Commit
{
    public const SCHEMA_JSON = '{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Tag\\Commit';
    public const SCHEMA_DESCRIPTION = '';
    private string $sha;
    private string $url;
    public function sha() : string
    {
        return $this->sha;
    }
    public function url() : string
    {
        return $this->url;
    }
}