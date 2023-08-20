<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Environment\ProtectionRules;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Zero
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "node_id",
        "type"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "examples": [
                3515
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDQ6R2F0ZTM1MTU="
            ]
        },
        "type": {
            "type": "string",
            "examples": [
                "wait_timer"
            ]
        },
        "wait_timer": {
            "type": "integer",
            "description": "The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).",
            "examples": [
                30
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 3515,
    "node_id": "MDQ6R2F0ZTM1MTU=",
    "type": "wait_timer",
    "wait_timer": 30
}';

    /**
     * waitTimer: The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).
     */
    public function __construct(public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $type, #[MapFrom('wait_timer')]
    public int|null $waitTimer,)
    {
    }
}
