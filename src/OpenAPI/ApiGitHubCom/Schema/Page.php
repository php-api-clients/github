<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Page
{
    public const SCHEMA_JSON = '{"title":"GitHub Pages","required":["url","status","cname","custom_404","public"],"type":"object","properties":{"url":{"type":"string","description":"The API address for accessing this Page resource.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages"]},"status":{"enum":["built","building","errored",null],"type":["string","null"],"description":"The status of the most recent build of the Page.","examples":["built"]},"cname":{"type":["string","null"],"description":"The Pages site\'s custom domain","examples":["example.com"]},"protected_domain_state":{"enum":["pending","verified","unverified",null],"type":["string","null"],"description":"The state if the domain is verified","examples":["pending"]},"pending_domain_unverified_at":{"type":["string","null"],"description":"The timestamp when a pending domain becomes unverified.","format":"date-time"},"custom_404":{"type":"boolean","description":"Whether the Page has a custom 404 page.","default":false,"examples":[false]},"html_url":{"type":"string","description":"The web address the Page can be accessed from.","format":"uri","examples":["https:\\/\\/example.com"]},"build_type":{"enum":["legacy","workflow",null],"type":["string","null"],"description":"The process in which the Page will be built.","examples":["legacy"]},"source":{"title":"Pages Source Hash","required":["branch","path"],"type":"object","properties":{"branch":{"type":"string"},"path":{"type":"string"}}},"public":{"type":"boolean","description":"Whether the GitHub Pages site is publicly visible. If set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site.","examples":[true]},"https_certificate":{"title":"Pages Https Certificate","required":["state","description","domains"],"type":"object","properties":{"state":{"enum":["new","authorization_created","authorization_pending","authorized","authorization_revoked","issued","uploaded","approved","errored","bad_authz","destroy_pending","dns_changed"],"type":"string","examples":["approved"]},"description":{"type":"string","examples":["Certificate is approved"]},"domains":{"type":"array","items":{"type":"string"},"description":"Array of the domain set and its alternate name (if it is configured)","examples":["example.com","www.example.com"]},"expires_at":{"type":"string","format":"date"}}},"https_enforced":{"type":"boolean","description":"Whether https is enabled on the domain","examples":[true]}},"description":"The configuration for GitHub Pages for a repository."}';
    public const SCHEMA_TITLE = 'GitHub Pages';
    public const SCHEMA_DESCRIPTION = 'The configuration for GitHub Pages for a repository.';
    /**
     * The API address for accessing this Page resource.
     */
    private string $url;
    /**
     * The status of the most recent build of the Page.
     */
    private $status;
    /**
     * The Pages site's custom domain
     */
    private $cname;
    /**
     * The state if the domain is verified
     */
    private $protected_domain_state;
    /**
     * The timestamp when a pending domain becomes unverified.
     */
    private $pending_domain_unverified_at;
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
    private $build_type;
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
    public function status()
    {
        return $this->status;
    }
    /**
     * The Pages site's custom domain
     */
    public function cname()
    {
        return $this->cname;
    }
    /**
     * The state if the domain is verified
     */
    public function protected_domain_state()
    {
        return $this->protected_domain_state;
    }
    /**
     * The timestamp when a pending domain becomes unverified.
     */
    public function pending_domain_unverified_at()
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
    public function build_type()
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
