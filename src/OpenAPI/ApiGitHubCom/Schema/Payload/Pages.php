<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Payload;

final class Pages
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"page_name":{"type":"string"},"title":{"type":"string"},"summary":{"type":["string","null"]},"action":{"type":"string"},"sha":{"type":"string"},"html_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Payload\\Pages';
    public const SCHEMA_DESCRIPTION = '';
    private string $page_name;
    private string $title;
    private ?string $summary;
    private string $action;
    private string $sha;
    private string $html_url;
    public function page_name() : string
    {
        return $this->page_name;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function summary() : ?string
    {
        return $this->summary;
    }
    public function action() : string
    {
        return $this->action;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
}
