<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreatePagesDeployment;

final class Request
{
    public const SCHEMA_JSON = '{"required":["artifact_url","pages_build_version","oidc_token"],"type":"object","properties":{"artifact_url":{"type":"string","description":"The URL of an artifact that contains the .zip or .tar of static assets to deploy. The artifact belongs to the repository."},"environment":{"type":"string","description":"The target environment for this GitHub Pages deployment.","default":"github-pages"},"pages_build_version":{"type":"string","description":"A unique string that represents the version of the build for this deployment.","default":"GITHUB_SHA"},"oidc_token":{"type":"string","description":"The OIDC token issued by GitHub Actions certifying the origin of the deployment."}},"description":"The object used to create GitHub Pages deployment"}';
    public const SCHEMA_TITLE = 'CreatePagesDeployment\\Request';
    public const SCHEMA_DESCRIPTION = 'The object used to create GitHub Pages deployment';
    /**
     * The URL of an artifact that contains the .zip or .tar of static assets to deploy. The artifact belongs to the repository.
     */
    private string $artifact_url;
    /**
     * The target environment for this GitHub Pages deployment.
     */
    private ?string $environment = null;
    /**
     * A unique string that represents the version of the build for this deployment.
     */
    private string $pages_build_version;
    /**
     * The OIDC token issued by GitHub Actions certifying the origin of the deployment.
     */
    private string $oidc_token;
    /**
     * The URL of an artifact that contains the .zip or .tar of static assets to deploy. The artifact belongs to the repository.
     */
    public function artifact_url() : string
    {
        return $this->artifact_url;
    }
    /**
     * The target environment for this GitHub Pages deployment.
     */
    public function environment() : ?string
    {
        return $this->environment;
    }
    /**
     * A unique string that represents the version of the build for this deployment.
     */
    public function pages_build_version() : string
    {
        return $this->pages_build_version;
    }
    /**
     * The OIDC token issued by GitHub Actions certifying the origin of the deployment.
     */
    public function oidc_token() : string
    {
        return $this->oidc_token;
    }
}
