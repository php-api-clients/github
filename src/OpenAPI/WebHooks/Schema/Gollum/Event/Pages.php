<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Gollum\Event;

final class Pages
{
    public const SCHEMA_TITLE = 'gollum$event::pages';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the page.
     */
    private string $page_name;
    /**
     * The current page title.
     */
    private string $title;
    private null $summary;
    /**
     * The action that was performed on the page. Can be `created` or `edited`.
     */
    private string $action;
    /**
     * The latest commit SHA of the page.
     */
    private string $sha;
    /**
     * Points to the HTML wiki page.
     */
    private string $html_url;
    /**
     * The name of the page.
     */
    public function page_name() : string
    {
        return $this->page_name;
    }
    /**
     * The current page title.
     */
    public function title() : string
    {
        return $this->title;
    }
    public function summary() : null
    {
        return $this->summary;
    }
    /**
     * The action that was performed on the page. Can be `created` or `edited`.
     */
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The latest commit SHA of the page.
     */
    public function sha() : string
    {
        return $this->sha;
    }
    /**
     * Points to the HTML wiki page.
     */
    public function html_url() : string
    {
        return $this->html_url;
    }
}
