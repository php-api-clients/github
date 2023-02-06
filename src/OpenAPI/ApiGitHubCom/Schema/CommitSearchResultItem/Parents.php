<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitSearchResultItem;

final class Parents
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CommitSearchResultItem\\Parents';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $url;
    public readonly string $html_url;
    public readonly string $sha;
    public function __construct(string $url, string $html_url, string $sha)
    {
        $this->url = $url;
        $this->html_url = $html_url;
        $this->sha = $sha;
    }
}
