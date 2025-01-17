<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsHostedRunnerMachineSpec
{
    public const SCHEMA_JSON         = '{
    "title": "Github-owned VM details.",
    "required": [
        "id",
        "cpu_cores",
        "memory_gb",
        "storage_gb"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "string",
            "description": "The ID used for the `size` parameter when creating a new runner.",
            "examples": [
                "8-core"
            ]
        },
        "cpu_cores": {
            "type": "integer",
            "description": "The number of cores.",
            "examples": [
                8
            ]
        },
        "memory_gb": {
            "type": "integer",
            "description": "The available RAM for the machine spec.",
            "examples": [
                32
            ]
        },
        "storage_gb": {
            "type": "integer",
            "description": "The available SSD storage for the machine spec.",
            "examples": [
                300
            ]
        }
    },
    "description": "Provides details of a particular machine spec."
}';
    public const SCHEMA_TITLE        = 'Github-owned VM details.';
    public const SCHEMA_DESCRIPTION  = 'Provides details of a particular machine spec.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "8-core",
    "cpu_cores": 8,
    "memory_gb": 32,
    "storage_gb": 300
}';

    /**
     * id: The ID used for the `size` parameter when creating a new runner.
     * cpuCores: The number of cores.
     * memoryGb: The available RAM for the machine spec.
     * storageGb: The available SSD storage for the machine spec.
     */
    public function __construct(public string $id, #[MapFrom('cpu_cores')]
    public int $cpuCores, #[MapFrom('memory_gb')]
    public int $memoryGb, #[MapFrom('storage_gb')]
    public int $storageGb,)
    {
    }
}
