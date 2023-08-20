<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Repos\ListCustomDeploymentRuleIntegrations\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer",
            "description": "The total number of custom deployment protection rule integrations available for this environment.",
            "examples": [
                35
            ]
        },
        "available_custom_deployment_protection_rule_integrations": {
            "type": "array",
            "items": {
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
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 35,
    "available_custom_deployment_protection_rule_integrations": [
        {
            "id": 3515,
            "slug": "my-custom-app",
            "integration_url": "https:\\/\\/api.github.com\\/apps\\/custom-app-slug",
            "node_id": "MDQ6R2F0ZTM1MTU="
        },
        {
            "id": 3515,
            "slug": "my-custom-app",
            "integration_url": "https:\\/\\/api.github.com\\/apps\\/custom-app-slug",
            "node_id": "MDQ6R2F0ZTM1MTU="
        }
    ]
}';

    /**
     * totalCount: The total number of custom deployment protection rule integrations available for this environment.
     */
    public function __construct(#[MapFrom('total_count')]
    public int|null $totalCount, #[MapFrom('available_custom_deployment_protection_rule_integrations')]
    public array|null $availableCustomDeploymentProtectionRuleIntegrations,)
    {
    }
}
