<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreatePagesDeployment\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["artifact_url","pages_build_version","oidc_token"],"type":"object","properties":{"artifact_url":{"type":"string","description":"The URL of an artifact that contains the .zip or .tar of static assets to deploy. The artifact belongs to the repository."},"environment":{"type":"string","description":"The target environment for this GitHub Pages deployment.","default":"github-pages"},"pages_build_version":{"type":"string","description":"A unique string that represents the version of the build for this deployment.","default":"GITHUB_SHA"},"oidc_token":{"type":"string","description":"The OIDC token issued by GitHub Actions certifying the origin of the deployment."}},"description":"The object used to create GitHub Pages deployment"}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The object used to create GitHub Pages deployment';
    public const SCHEMA_EXAMPLE_DATA = '{"artifact_url":"generated_artifact_url_null","environment":"generated_environment_null","pages_build_version":"generated_pages_build_version_null","oidc_token":"generated_oidc_token_null"}';
    /**
     * artifact_url: The URL of an artifact that contains the .zip or .tar of static assets to deploy. The artifact belongs to the repository.
     * environment: The target environment for this GitHub Pages deployment.
     * pages_build_version: A unique string that represents the version of the build for this deployment.
     * oidc_token: The OIDC token issued by GitHub Actions certifying the origin of the deployment.
     */
    public function __construct(public string $artifact_url, public ?string $environment, public string $pages_build_version, public string $oidc_token)
    {
    }
}
