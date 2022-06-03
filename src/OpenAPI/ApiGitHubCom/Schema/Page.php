<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Page
{
    public const SCHEMA_TITLE = 'GitHub Pages';
    public const SCHEMA_DESCRIPTION = 'The configuration for GitHub Pages for a repository.';
    /**
     * The API address for accessing this Page resource.
     */
    private string $url;
    /**
     * The status of the most recent build of the Page.
     */
    private ?string $status = null;
    /**
     * The Pages site's custom domain
     */
    private ?string $cname = null;
    /**
     * The state if the domain is verified
     */
    private ?string $protected_domain_state = null;
    /**
     * The timestamp when a pending domain becomes unverified.
     */
    private ?string $pending_domain_unverified_at = null;
    /**
     * Whether the Page has a custom 404 page.
     */
    private bool $custom_404;
    /**
     * The web address the Page can be accessed from.
     */
    private ?string $html_url = null;
    /**
     * The process in which the Page will be built.
     */
    private ?string $build_type = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesSourceHash::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesSourceHash $source = null;
    /**
     * Whether the GitHub Pages site is publicly visible. If set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site.
     */
    private bool $public;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHttpsCertificate::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHttpsCertificate $https_certificate = null;
    /**
     * Whether https is enabled on the domain
     */
    private ?bool $https_enforced = null;
    /**
     * The API address for accessing this Page resource.
     */
    public function url() : string
    {
        return $this->url;
    }
    /**
     * The status of the most recent build of the Page.
     */
    public function status() : ?string
    {
        return $this->status;
    }
    /**
     * The Pages site's custom domain
     */
    public function cname() : ?string
    {
        return $this->cname;
    }
    /**
     * The state if the domain is verified
     */
    public function protected_domain_state() : ?string
    {
        return $this->protected_domain_state;
    }
    /**
     * The timestamp when a pending domain becomes unverified.
     */
    public function pending_domain_unverified_at() : ?string
    {
        return $this->pending_domain_unverified_at;
    }
    /**
     * Whether the Page has a custom 404 page.
     */
    public function custom_404() : bool
    {
        return $this->custom_404;
    }
    /**
     * The web address the Page can be accessed from.
     */
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    /**
     * The process in which the Page will be built.
     */
    public function build_type() : ?string
    {
        return $this->build_type;
    }
    public function source() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesSourceHash
    {
        return $this->source;
    }
    /**
     * Whether the GitHub Pages site is publicly visible. If set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site.
     */
    public function public() : bool
    {
        return $this->public;
    }
    public function https_certificate() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHttpsCertificate
    {
        return $this->https_certificate;
    }
    /**
     * Whether https is enabled on the domain
     */
    public function https_enforced() : ?bool
    {
        return $this->https_enforced;
    }
}
