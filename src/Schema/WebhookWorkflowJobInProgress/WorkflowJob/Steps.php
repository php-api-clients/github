<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Steps
{
    public const SCHEMA_JSON         = '{
    "title": "Workflow Step",
    "required": [
        "name",
        "status",
        "conclusion",
        "number",
        "started_at",
        "completed_at"
    ],
    "type": "object",
    "properties": {
        "completed_at": {
            "type": [
                "string",
                "null"
            ]
        },
        "conclusion": {
            "enum": [
                "failure",
                "skipped",
                "success",
                null,
                "cancelled"
            ],
            "type": [
                "string",
                "null"
            ]
        },
        "name": {
            "type": "string"
        },
        "number": {
            "type": "integer"
        },
        "started_at": {
            "type": [
                "string",
                "null"
            ]
        },
        "status": {
            "enum": [
                "in_progress",
                "completed",
                "queued",
                "pending"
            ],
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Workflow Step';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "completed_at": "generated",
    "conclusion": "cancelled",
    "name": "generated",
    "number": 6,
    "started_at": "generated",
    "status": "pending"
}';

    public function __construct(#[MapFrom('completed_at')]
    public string|null $completedAt, public string|null $conclusion, public string $name, public int $number, #[MapFrom('started_at')]
    public string|null $startedAt, public string $status,)
    {
    }
}
