<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class DeploymentProtectionRule
{
    public const SCHEMA_JSON         = '{
    "title": "Deployment protection rule",
    "required": [
        "id",
        "node_id",
        "enabled",
        "app"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The unique identifier for the deployment protection rule.",
            "examples": [
                3515
            ]
        },
        "node_id": {
            "type": "string",
            "description": "The node ID for the deployment protection rule.",
            "examples": [
                "MDQ6R2F0ZTM1MTU="
            ]
        },
        "enabled": {
            "type": "boolean",
            "description": "Whether the deployment protection rule is enabled for the environment.",
            "examples": [
                true
            ]
        },
        "app": {
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
        }
    },
    "description": "Deployment protection rule"
}';
    public const SCHEMA_TITLE        = 'Deployment protection rule';
    public const SCHEMA_DESCRIPTION  = 'Deployment protection rule';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 3515,
    "node_id": "MDQ6R2F0ZTM1MTU=",
    "enabled": true,
    "app": {
        "id": 3515,
        "slug": "my-custom-app",
        "integration_url": "https:\\/\\/api.github.com\\/apps\\/custom-app-slug",
        "node_id": "MDQ6R2F0ZTM1MTU="
    }
}';

    /**
     * id: The unique identifier for the deployment protection rule.
     * nodeId: The node ID for the deployment protection rule.
     * enabled: Whether the deployment protection rule is enabled for the environment.
     * app: A GitHub App that is providing a custom deployment protection rule.
     */
    public function __construct(public int $id, #[MapFrom('node_id')]
    public string $nodeId, public bool $enabled, public Schema\CustomDeploymentRuleApp $app,)
    {
    }
}
