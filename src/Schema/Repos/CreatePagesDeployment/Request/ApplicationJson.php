<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreatePagesDeployment\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "artifact_url",
        "pages_build_version",
        "oidc_token"
    ],
    "type": "object",
    "properties": {
        "artifact_url": {
            "type": "string",
            "description": "The URL of an artifact that contains the .zip or .tar of static assets to deploy. The artifact belongs to the repository."
        },
        "environment": {
            "type": "string",
            "description": "The target environment for this GitHub Pages deployment.",
            "default": "github-pages"
        },
        "pages_build_version": {
            "type": "string",
            "description": "A unique string that represents the version of the build for this deployment.",
            "default": "GITHUB_SHA"
        },
        "oidc_token": {
            "type": "string",
            "description": "The OIDC token issued by GitHub Actions certifying the origin of the deployment."
        }
    },
    "description": "The object used to create GitHub Pages deployment"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The object used to create GitHub Pages deployment';
    public const SCHEMA_EXAMPLE_DATA = '{
    "artifact_url": "generated",
    "environment": "generated",
    "pages_build_version": "generated",
    "oidc_token": "generated"
}';

    /**
     * artifactUrl: The URL of an artifact that contains the .zip or .tar of static assets to deploy. The artifact belongs to the repository.
     * environment: The target environment for this GitHub Pages deployment.
     * pagesBuildVersion: A unique string that represents the version of the build for this deployment.
     * oidcToken: The OIDC token issued by GitHub Actions certifying the origin of the deployment.
     */
    public function __construct(#[MapFrom('artifact_url')]
    public string $artifactUrl, public string|null $environment, #[MapFrom('pages_build_version')]
    public string $pagesBuildVersion, #[MapFrom('oidc_token')]
    public string $oidcToken,)
    {
    }
}
