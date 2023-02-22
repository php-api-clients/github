<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class Page
{
    public const SCHEMA_JSON = '{"title":"GitHub Pages","required":["url","status","cname","custom_404","public"],"type":"object","properties":{"url":{"type":"string","description":"The API address for accessing this Page resource.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages"]},"status":{"enum":["built","building","errored",null],"type":["string","null"],"description":"The status of the most recent build of the Page.","examples":["built"]},"cname":{"type":["string","null"],"description":"The Pages site\'s custom domain","examples":["example.com"]},"protected_domain_state":{"enum":["pending","verified","unverified",null],"type":["string","null"],"description":"The state if the domain is verified","examples":["pending"]},"pending_domain_unverified_at":{"type":["string","null"],"description":"The timestamp when a pending domain becomes unverified.","format":"date-time"},"custom_404":{"type":"boolean","description":"Whether the Page has a custom 404 page.","default":false,"examples":[false]},"html_url":{"type":"string","description":"The web address the Page can be accessed from.","format":"uri","examples":["https:\\/\\/example.com"]},"build_type":{"enum":["legacy","workflow",null],"type":["string","null"],"description":"The process in which the Page will be built.","examples":["legacy"]},"source":{"title":"Pages Source Hash","required":["branch","path"],"type":"object","properties":{"branch":{"type":"string"},"path":{"type":"string"}}},"public":{"type":"boolean","description":"Whether the GitHub Pages site is publicly visible. If set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site.","examples":[true]},"https_certificate":{"title":"Pages Https Certificate","required":["state","description","domains"],"type":"object","properties":{"state":{"enum":["new","authorization_created","authorization_pending","authorized","authorization_revoked","issued","uploaded","approved","errored","bad_authz","destroy_pending","dns_changed"],"type":"string","examples":["approved"]},"description":{"type":"string","examples":["Certificate is approved"]},"domains":{"type":"array","items":{"type":"string"},"description":"Array of the domain set and its alternate name (if it is configured)","examples":["example.com","www.example.com"]},"expires_at":{"type":"string","format":"date"}}},"https_enforced":{"type":"boolean","description":"Whether https is enabled on the domain","examples":[true]}},"description":"The configuration for GitHub Pages for a repository."}';
    public const SCHEMA_TITLE = 'GitHub Pages';
    public const SCHEMA_DESCRIPTION = 'The configuration for GitHub Pages for a repository.';
    /**
     * The API address for accessing this Page resource.
     */
    public ?string $url;
    /**
     * The status of the most recent build of the Page.
     */
    public ?string $status;
    /**
     * The Pages site's custom domain
     */
    public ?string $cname;
    /**
     * The state if the domain is verified
     */
    public ?string $protected_domain_state;
    /**
     * The timestamp when a pending domain becomes unverified.
     */
    public ?string $pending_domain_unverified_at;
    /**
     * Whether the Page has a custom 404 page.
     */
    public ?bool $custom_404;
    /**
     * The web address the Page can be accessed from.
     */
    public string $html_url;
    /**
     * The process in which the Page will be built.
     */
    public ?string $build_type;
    public \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesSourceHash $source;
    /**
     * Whether the GitHub Pages site is publicly visible. If set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site.
     */
    public ?bool $public;
    public \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHttpsCertificate $https_certificate;
    /**
     * Whether https is enabled on the domain
     */
    public bool $https_enforced;
    public function __construct(string $url, string $status, string $cname, string $protected_domain_state, string $pending_domain_unverified_at, bool $custom_404, string $html_url, string $build_type, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesSourceHash $source, bool $public, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHttpsCertificate $https_certificate, bool $https_enforced)
    {
        $this->url = $url;
        $this->status = $status;
        $this->cname = $cname;
        $this->protected_domain_state = $protected_domain_state;
        $this->pending_domain_unverified_at = $pending_domain_unverified_at;
        $this->custom_404 = $custom_404;
        $this->html_url = $html_url;
        $this->build_type = $build_type;
        $this->source = $source;
        $this->public = $public;
        $this->https_certificate = $https_certificate;
        $this->https_enforced = $https_enforced;
    }
}
