<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag;

final class Object
{
    public const SCHEMA_JSON = '{"required":["sha","type","url"],"type":"object","properties":{"sha":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'GitTag\\Object';
    public const SCHEMA_DESCRIPTION = '';
    private string $sha;
    private string $type;
    private string $url;
    public function sha() : string
    {
        return $this->sha;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function url() : string
    {
        return $this->url;
    }
}
