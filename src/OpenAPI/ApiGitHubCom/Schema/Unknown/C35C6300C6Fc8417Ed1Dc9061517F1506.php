<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C35C6300C6Fc8417Ed1Dc9061517F1506
{
    public const SCHEMA_JSON = '{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'c_35c6300c6fc8417ed1dc9061517f1506';
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
