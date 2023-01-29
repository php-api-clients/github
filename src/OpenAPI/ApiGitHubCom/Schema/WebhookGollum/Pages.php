<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookGollum;

final class Pages
{
    public const SCHEMA_JSON = '{"required":["page_name","title","summary","action","sha","html_url"],"type":"object","properties":{"action":{"enum":["created","edited"],"type":"string","description":"The action that was performed on the page. Can be `created` or `edited`."},"html_url":{"type":"string","description":"Points to the HTML wiki page.","format":"uri"},"page_name":{"type":"string","description":"The name of the page."},"sha":{"type":"string","description":"The latest commit SHA of the page."},"summary":{"type":["string","null"]},"title":{"type":"string","description":"The current page title."}}}';
    public const SCHEMA_TITLE = 'WebhookGollum\\Pages';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The action that was performed on the page. Can be `created` or `edited`.
     */
    public readonly string $action;
    /**
     * Points to the HTML wiki page.
     */
    public readonly string $html_url;
    /**
     * The name of the page.
     */
    public readonly string $page_name;
    /**
     * The latest commit SHA of the page.
     */
    public readonly string $sha;
    public readonly ?string $summary;
    /**
     * The current page title.
     */
    public readonly string $title;
    public function __construct(string $action, string $html_url, string $page_name, string $sha, string $summary, string $title)
    {
        $this->action = $action;
        $this->html_url = $html_url;
        $this->page_name = $page_name;
        $this->sha = $sha;
        $this->summary = $summary;
        $this->title = $title;
    }
}
