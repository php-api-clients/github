<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SecretScanningScanHistory
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "incremental_scans": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "type": {
                        "type": "string",
                        "description": "The type of scan"
                    },
                    "status": {
                        "type": "string",
                        "description": "The state of the scan. Either \\"completed\\" or \\"running\\""
                    },
                    "completed_at": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The time that the scan was completed. Empty if the scan is active",
                        "format": "date-time"
                    },
                    "started_at": {
                        "type": "string",
                        "description": "The time that the scan was started",
                        "format": "date-time"
                    }
                },
                "description": "Information on a single scan performed by secret scanning on the repository"
            }
        },
        "pattern_update_scans": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "type": {
                        "type": "string",
                        "description": "The type of scan"
                    },
                    "status": {
                        "type": "string",
                        "description": "The state of the scan. Either \\"completed\\" or \\"running\\""
                    },
                    "completed_at": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The time that the scan was completed. Empty if the scan is active",
                        "format": "date-time"
                    },
                    "started_at": {
                        "type": "string",
                        "description": "The time that the scan was started",
                        "format": "date-time"
                    }
                },
                "description": "Information on a single scan performed by secret scanning on the repository"
            }
        },
        "backfill_scans": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "type": {
                        "type": "string",
                        "description": "The type of scan"
                    },
                    "status": {
                        "type": "string",
                        "description": "The state of the scan. Either \\"completed\\" or \\"running\\""
                    },
                    "completed_at": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The time that the scan was completed. Empty if the scan is active",
                        "format": "date-time"
                    },
                    "started_at": {
                        "type": "string",
                        "description": "The time that the scan was started",
                        "format": "date-time"
                    }
                },
                "description": "Information on a single scan performed by secret scanning on the repository"
            }
        },
        "custom_pattern_backfill_scans": {
            "type": "array",
            "items": {
                "allOf": [
                    {
                        "type": "object",
                        "properties": {
                            "type": {
                                "type": "string",
                                "description": "The type of scan"
                            },
                            "status": {
                                "type": "string",
                                "description": "The state of the scan. Either \\"completed\\" or \\"running\\""
                            },
                            "completed_at": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "description": "The time that the scan was completed. Empty if the scan is active",
                                "format": "date-time"
                            },
                            "started_at": {
                                "type": "string",
                                "description": "The time that the scan was started",
                                "format": "date-time"
                            }
                        },
                        "description": "Information on a single scan performed by secret scanning on the repository"
                    },
                    {
                        "type": "object",
                        "properties": {
                            "pattern_name": {
                                "type": "string",
                                "description": "Name of the custom pattern for custom pattern scans"
                            },
                            "pattern_scope": {
                                "type": "string",
                                "description": "Level at which the custom pattern is defined, one of \\"repository\\", \\"organization\\", or \\"enterprise\\""
                            }
                        }
                    }
                ]
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "incremental_scans": [
        {
            "type": "generated",
            "status": "generated",
            "completed_at": "1970-01-01T00:00:00+00:00",
            "started_at": "1970-01-01T00:00:00+00:00"
        },
        {
            "type": "generated",
            "status": "generated",
            "completed_at": "1970-01-01T00:00:00+00:00",
            "started_at": "1970-01-01T00:00:00+00:00"
        }
    ],
    "pattern_update_scans": [
        {
            "type": "generated",
            "status": "generated",
            "completed_at": "1970-01-01T00:00:00+00:00",
            "started_at": "1970-01-01T00:00:00+00:00"
        },
        {
            "type": "generated",
            "status": "generated",
            "completed_at": "1970-01-01T00:00:00+00:00",
            "started_at": "1970-01-01T00:00:00+00:00"
        }
    ],
    "backfill_scans": [
        {
            "type": "generated",
            "status": "generated",
            "completed_at": "1970-01-01T00:00:00+00:00",
            "started_at": "1970-01-01T00:00:00+00:00"
        },
        {
            "type": "generated",
            "status": "generated",
            "completed_at": "1970-01-01T00:00:00+00:00",
            "started_at": "1970-01-01T00:00:00+00:00"
        }
    ],
    "custom_pattern_backfill_scans": [
        {
            "type": "generated",
            "status": "generated",
            "completed_at": "1970-01-01T00:00:00+00:00",
            "started_at": "1970-01-01T00:00:00+00:00"
        },
        {
            "type": "generated",
            "status": "generated",
            "completed_at": "1970-01-01T00:00:00+00:00",
            "started_at": "1970-01-01T00:00:00+00:00"
        }
    ]
}';

    public function __construct(#[MapFrom('incremental_scans')]
    public array|null $incrementalScans, #[MapFrom('pattern_update_scans')]
    public array|null $patternUpdateScans, #[MapFrom('backfill_scans')]
    public array|null $backfillScans, #[MapFrom('custom_pattern_backfill_scans')]
    public array|null $customPatternBackfillScans,)
    {
    }
}
