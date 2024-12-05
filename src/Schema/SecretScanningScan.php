<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SecretScanningScan
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "type": {
            "type": "string",
            "description": "The type of scan"
        },
        "status": {
            "type": "string",
            "description": "The state of the scan. Either \\"completed\\", \\"running\\", or \\"pending\\""
        },
        "completed_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time that the scan was completed. Empty if the scan is running",
            "format": "date-time"
        },
        "started_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time that the scan was started. Empty if the scan is pending",
            "format": "date-time"
        }
    },
    "description": "Information on a single scan performed by secret scanning on the repository"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Information on a single scan performed by secret scanning on the repository';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "generated",
    "status": "generated",
    "completed_at": "1970-01-01T00:00:00+00:00",
    "started_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * type: The type of scan
     * status: The state of the scan. Either "completed", "running", or "pending"
     * completedAt: The time that the scan was completed. Empty if the scan is running
     * startedAt: The time that the scan was started. Empty if the scan is pending
     */
    public function __construct(public string|null $type, public string|null $status, #[MapFrom('completed_at')]
    public string|null $completedAt, #[MapFrom('started_at')]
    public string|null $startedAt,)
    {
    }
}
