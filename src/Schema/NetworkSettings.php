<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class NetworkSettings
{
    public const SCHEMA_JSON         = '{
    "title": "Hosted compute network settings resource",
    "required": [
        "id",
        "name",
        "subnet_id",
        "region"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "string",
            "description": "The unique identifier of the network settings resource.",
            "examples": [
                "220F78DACB92BBFBC5E6F22DE1CCF52309D"
            ]
        },
        "network_configuration_id": {
            "type": "string",
            "description": "The identifier of the network configuration that is using this settings resource.",
            "examples": [
                "934E208B3EE0BD60CF5F752C426BFB53562"
            ]
        },
        "name": {
            "type": "string",
            "description": "The name of the network settings resource.",
            "examples": [
                "my-network-settings"
            ]
        },
        "subnet_id": {
            "type": "string",
            "description": "The subnet this network settings resource is configured for.",
            "examples": [
                "\\/subscriptions\\/14839728-3ad9-43ab-bd2b-fa6ad0f75e2a\\/resourceGroups\\/my-rg\\/providers\\/Microsoft.Network\\/virtualNetworks\\/my-vnet\\/subnets\\/my-subnet"
            ]
        },
        "region": {
            "type": "string",
            "description": "The location of the subnet this network settings resource is configured for.",
            "examples": [
                "eastus"
            ]
        }
    },
    "description": "A hosted compute network settings resource."
}';
    public const SCHEMA_TITLE        = 'Hosted compute network settings resource';
    public const SCHEMA_DESCRIPTION  = 'A hosted compute network settings resource.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "220F78DACB92BBFBC5E6F22DE1CCF52309D",
    "network_configuration_id": "934E208B3EE0BD60CF5F752C426BFB53562",
    "name": "my-network-settings",
    "subnet_id": "\\/subscriptions\\/14839728-3ad9-43ab-bd2b-fa6ad0f75e2a\\/resourceGroups\\/my-rg\\/providers\\/Microsoft.Network\\/virtualNetworks\\/my-vnet\\/subnets\\/my-subnet",
    "region": "eastus"
}';

    /**
     * id: The unique identifier of the network settings resource.
     * networkConfigurationId: The identifier of the network configuration that is using this settings resource.
     * name: The name of the network settings resource.
     * subnetId: The subnet this network settings resource is configured for.
     * region: The location of the subnet this network settings resource is configured for.
     */
    public function __construct(public string $id, #[MapFrom('network_configuration_id')]
    public string|null $networkConfigurationId, public string $name, #[MapFrom('subnet_id')]
    public string $subnetId, public string $region,)
    {
    }
}
