<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\HostedCompute\ListNetworkConfigurationsForOrg\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "network_configurations"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "network_configurations": {
            "type": "array",
            "items": {
                "title": "Hosted compute network configuration",
                "required": [
                    "id",
                    "name",
                    "created_on"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "string",
                        "description": "The unique identifier of the network configuration.",
                        "examples": [
                            "123ABC456DEF789"
                        ]
                    },
                    "name": {
                        "type": "string",
                        "description": "The name of the network configuration.",
                        "examples": [
                            "my-network-configuration"
                        ]
                    },
                    "compute_service": {
                        "enum": [
                            "none",
                            "actions",
                            "codespaces"
                        ],
                        "type": "string",
                        "description": "The hosted compute service the network configuration supports."
                    },
                    "network_settings_ids": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        },
                        "description": "The unique identifier of each network settings in the configuration.",
                        "examples": [
                            "123ABC456DEF789"
                        ]
                    },
                    "created_on": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The time at which the network configuration was created, in ISO 8601 format.",
                        "format": "date-time",
                        "examples": [
                            "2024-04-26T11:31:07Z"
                        ]
                    }
                },
                "description": "A hosted compute network configuration."
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "network_configurations": [
        {
            "id": "123ABC456DEF789",
            "name": "my-network-configuration",
            "compute_service": "none",
            "network_settings_ids": [
                "123ABC456DEF789",
                "123ABC456DEF789"
            ],
            "created_on": "2024-04-26T11:31:07Z"
        },
        {
            "id": "123ABC456DEF789",
            "name": "my-network-configuration",
            "compute_service": "none",
            "network_settings_ids": [
                "123ABC456DEF789",
                "123ABC456DEF789"
            ],
            "created_on": "2024-04-26T11:31:07Z"
        }
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, #[MapFrom('network_configurations')]
    public array $networkConfigurations,)
    {
    }
}
