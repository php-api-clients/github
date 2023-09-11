<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer",
            "description": "The number of enabled custom deployment protection rules for this environment",
            "examples": [
                10
            ]
        },
        "custom_deployment_protection_rules": {
            "type": "array",
            "items": {
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
            }
        }
    },
    "example": {
        "value": [
            {
                "total_count": 2
            },
            {
                "custom_deployment_protection_rules": [
                    {
                        "id": 3,
                        "node_id": "IEH37kRlcGxveW1lbnRTdGF0ddiv",
                        "enabled": true,
                        "app": {
                            "id": 1,
                            "node_id": "GHT58kRlcGxveW1lbnRTdTY!bbcy",
                            "slug": "a-custom-app",
                            "integration_url": "https:\\/\\/api.github.com\\/apps\\/a-custom-app"
                        }
                    },
                    {
                        "id": 4,
                        "node_id": "MDE2OkRlcGxveW1lbnRTdHJ41128",
                        "enabled": true,
                        "app": {
                            "id": 1,
                            "node_id": "UHVE67RlcGxveW1lbnRTdTY!jfeuy",
                            "slug": "another-custom-app",
                            "integration_url": "https:\\/\\/api.github.com\\/apps\\/another-custom-app"
                        }
                    }
                ]
            }
        ]
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 10,
    "custom_deployment_protection_rules": [
        {
            "id": 3515,
            "node_id": "MDQ6R2F0ZTM1MTU=",
            "enabled": true,
            "app": {
                "id": 3515,
                "slug": "my-custom-app",
                "integration_url": "https:\\/\\/api.github.com\\/apps\\/custom-app-slug",
                "node_id": "MDQ6R2F0ZTM1MTU="
            }
        },
        {
            "id": 3515,
            "node_id": "MDQ6R2F0ZTM1MTU=",
            "enabled": true,
            "app": {
                "id": 3515,
                "slug": "my-custom-app",
                "integration_url": "https:\\/\\/api.github.com\\/apps\\/custom-app-slug",
                "node_id": "MDQ6R2F0ZTM1MTU="
            }
        }
    ]
}';

    /**
     * totalCount: The number of enabled custom deployment protection rules for this environment
     */
    public function __construct(#[MapFrom('total_count')]
    public int|null $totalCount, #[MapFrom('custom_deployment_protection_rules')]
    public array|null $customDeploymentProtectionRules,)
    {
    }
}
