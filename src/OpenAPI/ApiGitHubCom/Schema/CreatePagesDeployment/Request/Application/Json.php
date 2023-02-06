<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreatePagesDeployment\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["artifact_url","pages_build_version","oidc_token"],"type":"object","properties":{"artifact_url":{"type":"string","description":"The URL of an artifact that contains the .zip or .tar of static assets to deploy. The artifact belongs to the repository."},"environment":{"type":"string","description":"The target environment for this GitHub Pages deployment.","default":"github-pages"},"pages_build_version":{"type":"string","description":"A unique string that represents the version of the build for this deployment.","default":"GITHUB_SHA"},"oidc_token":{"type":"string","description":"The OIDC token issued by GitHub Actions certifying the origin of the deployment."}},"description":"The object used to create GitHub Pages deployment"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CreatePagesDeployment\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = 'The object used to create GitHub Pages deployment';
    /**
     * The URL of an artifact that contains the .zip or .tar of static assets to deploy. The artifact belongs to the repository.
     */
    public readonly string $artifact_url;
    /**
     * The target environment for this GitHub Pages deployment.
     */
    public readonly ?string $environment;
    /**
     * A unique string that represents the version of the build for this deployment.
     */
    public readonly string $pages_build_version;
    /**
     * The OIDC token issued by GitHub Actions certifying the origin of the deployment.
     */
    public readonly string $oidc_token;
    public function __construct(string $artifact_url, string $environment, string $pages_build_version, string $oidc_token)
    {
        $this->artifact_url = $artifact_url;
        $this->environment = $environment;
        $this->pages_build_version = $pages_build_version;
        $this->oidc_token = $oidc_token;
    }
}
