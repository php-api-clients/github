<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitSearchResultItem;

final class Parents
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'CommitSearchResultItem\\Parents';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private string $html_url;
    private string $sha;
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function sha() : string
    {
        return $this->sha;
    }
}
