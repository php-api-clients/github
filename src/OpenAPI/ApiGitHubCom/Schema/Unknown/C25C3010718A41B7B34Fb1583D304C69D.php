<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C25C3010718A41B7B34Fb1583D304C69D
{
    public const SCHEMA_JSON = '{"required":["sha","type","url"],"type":"object","properties":{"sha":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'c_25c3010718a41b7b34fb1583d304c69d';
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
