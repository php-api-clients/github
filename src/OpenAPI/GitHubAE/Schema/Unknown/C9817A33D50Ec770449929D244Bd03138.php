<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C9817A33D50Ec770449929D244Bd03138
{
    public const SCHEMA_JSON = '{"required":["page_name","title","summary","action","sha","html_url"],"type":"object","properties":{"action":{"enum":["created","edited"],"type":"string","description":"The action that was performed on the page. Can be `created` or `edited`."},"html_url":{"type":"string","description":"Points to the HTML wiki page.","format":"uri"},"page_name":{"type":"string","description":"The name of the page."},"sha":{"type":"string","description":"The latest commit SHA of the page."},"summary":{"type":["string","null"]},"title":{"type":"string","description":"The current page title."}}}';
    public const SCHEMA_TITLE = 'c_9817a33d50ec770449929d244bd03138';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The action that was performed on the page. Can be `created` or `edited`.
     */
    private string $action;
    /**
     * Points to the HTML wiki page.
     */
    private string $html_url;
    /**
     * The name of the page.
     */
    private string $page_name;
    /**
     * The latest commit SHA of the page.
     */
    private string $sha;
    private $summary;
    /**
     * The current page title.
     */
    private string $title;
    /**
     * The action that was performed on the page. Can be `created` or `edited`.
     */
    public function action() : string
    {
        return $this->action;
    }
    /**
     * Points to the HTML wiki page.
     */
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * The name of the page.
     */
    public function page_name() : string
    {
        return $this->page_name;
    }
    /**
     * The latest commit SHA of the page.
     */
    public function sha() : string
    {
        return $this->sha;
    }
    public function summary()
    {
        return $this->summary;
    }
    /**
     * The current page title.
     */
    public function title() : string
    {
        return $this->title;
    }
}