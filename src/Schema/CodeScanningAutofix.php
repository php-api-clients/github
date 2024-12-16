<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningAutofix
{
    public const SCHEMA_JSON         = '{
    "required": [
        "status",
        "description",
        "started_at"
    ],
    "type": "object",
    "properties": {
        "status": {
            "enum": [
                "pending",
                "error",
                "success",
                "outdated"
            ],
            "type": "string",
            "description": "The status of an autofix."
        },
        "description": {
            "type": [
                "string",
                "null"
            ],
            "description": "The description of an autofix."
        },
        "started_at": {
            "type": "string",
            "description": "The start time of an autofix in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "status": "outdated",
    "description": "generated",
    "started_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * status: The status of an autofix.
     * description: The description of an autofix.
     * startedAt: The start time of an autofix in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function __construct(public string $status, public string|null $description, #[MapFrom('started_at')]
    public string $startedAt,)
    {
    }
}
