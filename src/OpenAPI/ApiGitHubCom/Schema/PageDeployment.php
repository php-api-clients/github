<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PageDeployment
{
    public const SCHEMA_TITLE = 'GitHub Pages';
    public const SCHEMA_DESCRIPTION = 'The GitHub Pages deployment status.';
    /**
     * The URI to monitor GitHub Pages deployment status.
     */
    private string $status_url;
    /**
     * The URI to the deployed GitHub Pages.
     */
    private string $page_url;
    /**
     * The URI to the deployed GitHub Pages preview.
     */
    private ?string $preview_url = null;
    /**
     * The URI to monitor GitHub Pages deployment status.
     */
    public function status_url() : string
    {
        return $this->status_url;
    }
    /**
     * The URI to the deployed GitHub Pages.
     */
    public function page_url() : string
    {
        return $this->page_url;
    }
    /**
     * The URI to the deployed GitHub Pages preview.
     */
    public function preview_url() : ?string
    {
        return $this->preview_url;
    }
}
