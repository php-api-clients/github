<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\HostedCompute\CreateNetworkConfigurationForOrg\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name",
        "network_settings_ids"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "Name of the network configuration. Must be between 1 and 100 characters and may only contain upper and lowercase letters a-z, numbers 0-9, \'.\', \'-\', and \'_\'."
        },
        "compute_service": {
            "enum": [
                "none",
                "actions"
            ],
            "type": "string",
            "description": "The hosted compute service to use for the network configuration."
        },
        "network_settings_ids": {
            "maxItems": 1,
            "minItems": 1,
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The identifier of the network settings to use for the network configuration. Exactly one network settings must be specified."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "compute_service": "none",
    "network_settings_ids": [
        "generated"
    ]
}';

    /**
     * name: Name of the network configuration. Must be between 1 and 100 characters and may only contain upper and lowercase letters a-z, numbers 0-9, '.', '-', and '_'.
     * computeService: The hosted compute service to use for the network configuration.
     * networkSettingsIds: The identifier of the network settings to use for the network configuration. Exactly one network settings must be specified.
     */
    public function __construct(public string $name, #[MapFrom('compute_service')]
    public string|null $computeService, #[MapFrom('network_settings_ids')]
    public array $networkSettingsIds,)
    {
    }
}
