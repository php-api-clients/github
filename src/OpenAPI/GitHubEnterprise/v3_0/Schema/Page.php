<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Page
{
    public const SCHEMA_TITLE = 'GitHub Pages';
    public const SPL_HASH = '000000001f1e2143000000004be6709d';
    public const SCHEMA_DESCRIPTION = 'The configuration for GitHub Pages for a repository.';
    /**
     * The API address for accessing this Page resource.
     */
    private string $url;
    /**
     * The status of the most recent build of the Page.
     */
    private string $status;
    /**
     * The Pages site's custom domain
     */
    private string $cname;
    /**
     * Whether the Page has a custom 404 page.
     */
    private bool $custom_404;
    /**
     * The web address the Page can be accessed from.
     */
    private string $html_url;
    private object $source;
    /**
     * Whether the GitHub Pages site is publicly visible. If set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site.
     */
    private bool $public;
    private object $https_certificate;
    /**
     * Whether https is enabled on the domain
     */
    private bool $https_enforced;
    public function url() : string
    {
        return $this->url;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function cname() : string
    {
        return $this->cname;
    }
    public function custom_404() : bool
    {
        return $this->custom_404;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function source() : object
    {
        return $this->source;
    }
    public function public() : bool
    {
        return $this->public;
    }
    public function https_certificate() : object
    {
        return $this->https_certificate;
    }
    public function https_enforced() : bool
    {
        return $this->https_enforced;
    }
}
