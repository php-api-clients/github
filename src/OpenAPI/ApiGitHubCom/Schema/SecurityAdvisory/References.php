<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory;

final class References
{
    public const SCHEMA_JSON = '{"required":["url"],"type":"object","properties":{"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'SecurityAdvisory\\References';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    public function url() : string
    {
        return $this->url;
    }
}
