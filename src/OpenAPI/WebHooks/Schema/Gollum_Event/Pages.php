<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Gollum_Event;

final class Pages
{
    public const SCHEMA_TITLE       = 'gollum$event::pages';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the page.
     */
    private ?string $page_name = null;
    /**
     * The current page title.
     */
    private ?string $title = null;
    private ?null $summary = null;
    /**
     * The action that was performed on the page. Can be `created` or `edited`.
     */
    private ?string $action = null;
    /**
     * The latest commit SHA of the page.
     */
    private ?string $sha = null;
    /**
     * Points to the HTML wiki page.
     */
    private ?string $html_url = null;

    public function page_name(): ?string
    {
        return $this->page_name;
    }

    public function title(): ?string
    {
        return $this->title;
    }

    public function summary(): ?null
    {
        return $this->summary;
    }

    public function action(): ?string
    {
        return $this->action;
    }

    public function sha(): ?string
    {
        return $this->sha;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }
}
