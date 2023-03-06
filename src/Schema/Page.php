<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Page
{
    public const SCHEMA_JSON = '{"title":"GitHub Pages","required":["url","status","cname","custom_404","public"],"type":"object","properties":{"url":{"type":"string","description":"The API address for accessing this Page resource.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages"]},"status":{"enum":["built","building","errored",null],"type":["string","null"],"description":"The status of the most recent build of the Page.","examples":["built"]},"cname":{"type":["string","null"],"description":"The Pages site\'s custom domain","examples":["example.com"]},"protected_domain_state":{"enum":["pending","verified","unverified",null],"type":["string","null"],"description":"The state if the domain is verified","examples":["pending"]},"pending_domain_unverified_at":{"type":["string","null"],"description":"The timestamp when a pending domain becomes unverified.","format":"date-time"},"custom_404":{"type":"boolean","description":"Whether the Page has a custom 404 page.","default":false,"examples":[false]},"html_url":{"type":"string","description":"The web address the Page can be accessed from.","format":"uri","examples":["https:\\/\\/example.com"]},"build_type":{"enum":["legacy","workflow",null],"type":["string","null"],"description":"The process in which the Page will be built.","examples":["legacy"]},"source":{"title":"Pages Source Hash","required":["branch","path"],"type":"object","properties":{"branch":{"type":"string"},"path":{"type":"string"}}},"public":{"type":"boolean","description":"Whether the GitHub Pages site is publicly visible. If set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site.","examples":[true]},"https_certificate":{"title":"Pages Https Certificate","required":["state","description","domains"],"type":"object","properties":{"state":{"enum":["new","authorization_created","authorization_pending","authorized","authorization_revoked","issued","uploaded","approved","errored","bad_authz","destroy_pending","dns_changed"],"type":"string","examples":["approved"]},"description":{"type":"string","examples":["Certificate is approved"]},"domains":{"type":"array","items":{"type":"string"},"description":"Array of the domain set and its alternate name (if it is configured)","examples":["example.com","www.example.com"]},"expires_at":{"type":"string","format":"date"}}},"https_enforced":{"type":"boolean","description":"Whether https is enabled on the domain","examples":[true]}},"description":"The configuration for GitHub Pages for a repository."}';
    public const SCHEMA_TITLE = 'GitHub Pages';
    public const SCHEMA_DESCRIPTION = 'The configuration for GitHub Pages for a repository.';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages","status":"built","cname":"example.com","protected_domain_state":"pending","pending_domain_unverified_at":"generated_pending_domain_unverified_at","custom_404":false,"html_url":"https:\\/\\/example.com","build_type":"legacy","source":{"branch":"generated_branch","path":"generated_path"},"public":true,"https_certificate":{"state":"approved","description":"Certificate is approved","domains":["www.example.com"],"expires_at":"generated_expires_at"},"https_enforced":true}';
    /**
     * url: The API address for accessing this Page resource.
     * status: The status of the most recent build of the Page.
     * cname: The Pages site's custom domain
     * protected_domain_state: The state if the domain is verified
     * pending_domain_unverified_at: The timestamp when a pending domain becomes unverified.
     * custom_404: Whether the Page has a custom 404 page.
     * html_url: The web address the Page can be accessed from.
     * build_type: The process in which the Page will be built.
     * public: Whether the GitHub Pages site is publicly visible. If set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site.
     * https_enforced: Whether https is enabled on the domain
     */
    public function __construct(public ?string $url, public ?string $status, public ?string $cname, public ?string $protected_domain_state, public ?string $pending_domain_unverified_at, public ?bool $custom_404, public string $html_url, public ?string $build_type, public Schema\PagesSourceHash $source, public ?bool $public, public Schema\PagesHttpsCertificate $https_certificate, public bool $https_enforced)
    {
    }
}
