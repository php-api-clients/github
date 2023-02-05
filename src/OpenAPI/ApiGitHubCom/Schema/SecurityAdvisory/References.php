<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory;

final class References
{
    public const SCHEMA_JSON = '{"required":["url"],"type":"object","properties":{"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'SecurityAdvisory\\References';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $url;
    public function __construct(string $url)
    {
        $this->url = $url;
    }
}
