<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ShortBlob
{
    public const SCHEMA_JSON = '{"title":"Short Blob","required":["url","sha"],"type":"object","properties":{"url":{"type":"string"},"sha":{"type":"string"}},"description":"Short Blob"}';
    public const SCHEMA_TITLE = 'Short Blob';
    public const SCHEMA_DESCRIPTION = 'Short Blob';
    public readonly string $url;
    public readonly string $sha;
    public function __construct(string $url, string $sha)
    {
        $this->url = $url;
        $this->sha = $sha;
    }
}
