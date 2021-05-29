<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class Page
{
    public const SCHEMA_TITLE       = 'GitHub Pages';
    public const SCHEMA_DESCRIPTION = 'The configuration for GitHub Pages for a repository.';
    /**
     * The API address for accessing this Page resource.
     */
    private ?string $url = null;
    /**
     * The status of the most recent build of the Page.
     */
    private ?string $status = null;
    /**
     * The Pages site's custom domain
     */
    private ?string $cname = null;
    /**
     * Whether the Page has a custom 404 page.
     */
    private ?bool $custom_404 = null;
    /**
     * The web address the Page can be accessed from.
     */
    private ?string $html_url = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PagesSourceHash::class) */
    private ?PagesSourceHash $source = null;
    /**
     * Whether the GitHub Pages site is publicly visible. If set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site.
     */
    private ?bool $public = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PagesHttpsCertificate::class) */
    private ?PagesHttpsCertificate $https_certificate = null;
    /**
     * Whether https is enabled on the domain
     */
    private ?bool $https_enforced = null;

    public function url(): ?string
    {
        return $this->url;
    }

    public function status(): ?string
    {
        return $this->status;
    }

    public function cname(): ?string
    {
        return $this->cname;
    }

    public function custom_404(): ?bool
    {
        return $this->custom_404;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function source(): ?PagesSourceHash
    {
        return $this->source;
    }

    public function public(): ?bool
    {
        return $this->public;
    }

    public function https_certificate(): ?PagesHttpsCertificate
    {
        return $this->https_certificate;
    }

    public function https_enforced(): ?bool
    {
        return $this->https_enforced;
    }
}
