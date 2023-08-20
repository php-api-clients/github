<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Actions\GenerateRunnerJitconfigForOrg\Response\ApplicationJson;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Created
{
    public const SCHEMA_JSON         = '{
    "required": [
        "runner",
        "encoded_jit_config"
    ],
    "type": "object",
    "properties": {
        "runner": {
            "title": "Self hosted runners",
            "required": [
                "id",
                "name",
                "os",
                "status",
                "busy",
                "labels"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "description": "The id of the runner.",
                    "examples": [
                        5
                    ]
                },
                "runner_group_id": {
                    "type": "integer",
                    "description": "The id of the runner group.",
                    "examples": [
                        1
                    ]
                },
                "name": {
                    "type": "string",
                    "description": "The name of the runner.",
                    "examples": [
                        "iMac"
                    ]
                },
                "os": {
                    "type": "string",
                    "description": "The Operating System of the runner.",
                    "examples": [
                        "macos"
                    ]
                },
                "status": {
                    "type": "string",
                    "description": "The status of the runner.",
                    "examples": [
                        "online"
                    ]
                },
                "busy": {
                    "type": "boolean"
                },
                "labels": {
                    "type": "array",
                    "items": {
                        "title": "Self hosted runner label",
                        "required": [
                            "name"
                        ],
                        "type": "object",
                        "properties": {
                            "id": {
                                "type": "integer",
                                "description": "Unique identifier of the label."
                            },
                            "name": {
                                "type": "string",
                                "description": "Name of the label."
                            },
                            "type": {
                                "enum": [
                                    "read-only",
                                    "custom"
                                ],
                                "type": "string",
                                "description": "The type of label. Read-only labels are applied automatically when the runner is configured."
                            }
                        },
                        "description": "A label for a self hosted runner"
                    }
                }
            },
            "description": "A self hosted runner"
        },
        "encoded_jit_config": {
            "type": "string",
            "description": "The base64 encoded runner configuration."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "runner": {
        "id": 5,
        "runner_group_id": 1,
        "name": "iMac",
        "os": "macos",
        "status": "online",
        "busy": false,
        "labels": [
            {
                "id": 2,
                "name": "generated",
                "type": "custom"
            },
            {
                "id": 2,
                "name": "generated",
                "type": "custom"
            }
        ]
    },
    "encoded_jit_config": "generated"
}';

    /**
     * runner: A self hosted runner
     * encodedJitConfig: The base64 encoded runner configuration.
     */
    public function __construct(public Schema\Runner $runner, #[MapFrom('encoded_jit_config')]
    public string $encodedJitConfig,)
    {
    }
}
