<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class ShortBlob
{
    public const SCHEMA_JSON = '{"title":"Short Blob","required":["url","sha"],"type":"object","properties":{"url":{"type":"string"},"sha":{"type":"string"}},"description":"Short Blob"}';
    public const SCHEMA_TITLE = 'Short Blob';
    public const SCHEMA_DESCRIPTION = 'Short Blob';
    public ?string $url;
    public ?string $sha;
    public function __construct(string $url, string $sha)
    {
        $this->url = $url;
        $this->sha = $sha;
    }
}
