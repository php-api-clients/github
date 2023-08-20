<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CustomDeploymentRuleApp
{
    public const SCHEMA_JSON         = '{
    "title": "Custom deployment protection rule app",
    "required": [
        "id",
        "slug",
        "integration_url",
        "node_id"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The unique identifier of the deployment protection rule integration.",
            "examples": [
                3515
            ]
        },
        "slug": {
            "type": "string",
            "description": "The slugified name of the deployment protection rule integration.",
            "examples": [
                "my-custom-app"
            ]
        },
        "integration_url": {
            "type": "string",
            "description": "The URL for the endpoint to get details about the app.",
            "examples": [
                "https:\\/\\/api.github.com\\/apps\\/custom-app-slug"
            ]
        },
        "node_id": {
            "type": "string",
            "description": "The node ID for the deployment protection rule integration.",
            "examples": [
                "MDQ6R2F0ZTM1MTU="
            ]
        }
    },
    "description": "A GitHub App that is providing a custom deployment protection rule."
}';
    public const SCHEMA_TITLE        = 'Custom deployment protection rule app';
    public const SCHEMA_DESCRIPTION  = 'A GitHub App that is providing a custom deployment protection rule.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 3515,
    "slug": "my-custom-app",
    "integration_url": "https:\\/\\/api.github.com\\/apps\\/custom-app-slug",
    "node_id": "MDQ6R2F0ZTM1MTU="
}';

    /**
     * id: The unique identifier of the deployment protection rule integration.
     * slug: The slugified name of the deployment protection rule integration.
     * integrationUrl: The URL for the endpoint to get details about the app.
     * nodeId: The node ID for the deployment protection rule integration.
     */
    public function __construct(public int $id, public string $slug, #[MapFrom('integration_url')]
    public string $integrationUrl, #[MapFrom('node_id')]
    public string $nodeId,)
    {
    }
}
