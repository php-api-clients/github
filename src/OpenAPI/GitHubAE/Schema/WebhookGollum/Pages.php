<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookGollum;

final class Pages
{
    public const SCHEMA_TITLE = 'webhook-gollum::pages';
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
