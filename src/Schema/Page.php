<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Page
{
    public const SCHEMA_JSON         = '{"title":"GitHub Pages","required":["url","status","cname","custom_404","public"],"type":"object","properties":{"url":{"type":"string","description":"The API address for accessing this Page resource.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages"]},"status":{"enum":["built","building","errored",null],"type":["string","null"],"description":"The status of the most recent build of the Page.","examples":["built"]},"cname":{"type":["string","null"],"description":"The Pages site\'s custom domain","examples":["example.com"]},"protected_domain_state":{"enum":["pending","verified","unverified",null],"type":["string","null"],"description":"The state if the domain is verified","examples":["pending"]},"pending_domain_unverified_at":{"type":["string","null"],"description":"The timestamp when a pending domain becomes unverified.","format":"date-time"},"custom_404":{"type":"boolean","description":"Whether the Page has a custom 404 page.","default":false,"examples":[false]},"html_url":{"type":"string","description":"The web address the Page can be accessed from.","format":"uri","examples":["https:\\/\\/example.com"]},"build_type":{"enum":["legacy","workflow",null],"type":["string","null"],"description":"The process in which the Page will be built.","examples":["legacy"]},"source":{"title":"Pages Source Hash","required":["branch","path"],"type":"object","properties":{"branch":{"type":"string"},"path":{"type":"string"}}},"public":{"type":"boolean","description":"Whether the GitHub Pages site is publicly visible. If set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site.","examples":[true]},"https_certificate":{"title":"Pages Https Certificate","required":["state","description","domains"],"type":"object","properties":{"state":{"enum":["new","authorization_created","authorization_pending","authorized","authorization_revoked","issued","uploaded","approved","errored","bad_authz","destroy_pending","dns_changed"],"type":"string","examples":["approved"]},"description":{"type":"string","examples":["Certificate is approved"]},"domains":{"type":"array","items":{"type":"string"},"description":"Array of the domain set and its alternate name (if it is configured)","examples":["example.com","www.example.com"]},"expires_at":{"type":"string","format":"date"}}},"https_enforced":{"type":"boolean","description":"Whether https is enabled on the domain","examples":[true]}},"description":"The configuration for GitHub Pages for a repository."}';
    public const SCHEMA_TITLE        = 'GitHub Pages';
    public const SCHEMA_DESCRIPTION  = 'The configuration for GitHub Pages for a repository.';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages","status":"built","cname":"example.com","protected_domain_state":"pending","pending_domain_unverified_at":"1970-01-01T00:00:00+00:00","custom_404":false,"html_url":"https:\\/\\/example.com","build_type":"legacy","source":{"branch":"generated","path":"generated"},"public":true,"https_certificate":{"state":"approved","description":"Certificate is approved","domains":["example.com","example.com"],"expires_at":"generated"},"https_enforced":true}';

    /**
     * url: The API address for accessing this Page resource.
     * status: The status of the most recent build of the Page.
     * cname: The Pages site's custom domain
     * protectedDomainState: The state if the domain is verified
     * pendingDomainUnverifiedAt: The timestamp when a pending domain becomes unverified.
     * customFourHundredFour: Whether the Page has a custom 404 page.
     * htmlUrl: The web address the Page can be accessed from.
     * buildType: The process in which the Page will be built.
     * public: Whether the GitHub Pages site is publicly visible. If set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site.
     * httpsEnforced: Whether https is enabled on the domain
     */
    public function __construct(public string $url, public ?string $status, public ?string $cname, #[MapFrom('protected_domain_state')] public ?string $protectedDomainState, #[MapFrom('pending_domain_unverified_at')] public ?string $pendingDomainUnverifiedAt, #[MapFrom('custom_404')] public bool $customFourHundredFour, #[MapFrom('html_url')] public ?string $htmlUrl, #[MapFrom('build_type')] public ?string $buildType, public ?Schema\PagesSourceHash $source, public bool $public, #[MapFrom('https_certificate')] public ?Schema\PagesHttpsCertificate $httpsCertificate, #[MapFrom('https_enforced')] public ?bool $httpsEnforced)
    {
    }
}
