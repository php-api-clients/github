<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Payload;

final class Pages
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"page_name":{"type":"string"},"title":{"type":"string"},"summary":{"type":["string","null"]},"action":{"type":"string"},"sha":{"type":"string"},"html_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Payload\\Pages';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $page_name;
    public readonly string $title;
    public readonly ?string $summary;
    public readonly string $action;
    public readonly string $sha;
    public readonly string $html_url;
    public function __construct(string $page_name, string $title, string $summary, string $action, string $sha, string $html_url)
    {
        $this->page_name = $page_name;
        $this->title = $title;
        $this->summary = $summary;
        $this->action = $action;
        $this->sha = $sha;
        $this->html_url = $html_url;
    }
}
