<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class NetworkConfiguration
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = 'Hosted compute network configuration';
    public const SCHEMA_DESCRIPTION  = 'A hosted compute network configuration.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "123ABC456DEF789",
    "name": "my-network-configuration",
    "compute_service": "none",
    "network_settings_ids": [
        "123ABC456DEF789",
        "123ABC456DEF789"
    ],
    "created_on": "2024-04-26T11:31:07Z"
}';

    /**
     * id: The unique identifier of the network configuration.
     * name: The name of the network configuration.
     * computeService: The hosted compute service the network configuration supports.
     * networkSettingsIds: The unique identifier of each network settings in the configuration.
     * createdOn: The time at which the network configuration was created, in ISO 8601 format.
     */
    public function __construct(public string $id, public string $name, #[MapFrom('compute_service')]
    public string|null $computeService, #[MapFrom('network_settings_ids')]
    public array|null $networkSettingsIds, #[MapFrom('created_on')]
    public string|null $createdOn,)
    {
    }
}
