<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PageDeployment
{
    public const SCHEMA_JSON = '{"title":"GitHub Pages","required":["status_url","page_url"],"type":"object","properties":{"status_url":{"type":"string","description":"The URI to monitor GitHub Pages deployment status.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages\\/deployments\\/4fd754f7e594640989b406850d0bc8f06a121251\\/status"]},"page_url":{"type":"string","description":"The URI to the deployed GitHub Pages.","format":"uri","examples":["hello-world.github.io"]},"preview_url":{"type":"string","description":"The URI to the deployed GitHub Pages preview.","format":"uri","examples":["monalisa-1231a2312sa32-23sda74.drafts.github.io"]}},"description":"The GitHub Pages deployment status."}';
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
