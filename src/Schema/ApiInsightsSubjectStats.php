<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApiInsightsSubjectStats
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "subject_type": {
            "type": "string"
        },
        "subject_name": {
            "type": "string"
        },
        "subject_id": {
            "type": "integer",
            "format": "int64"
        },
        "total_request_count": {
            "type": "integer"
        },
        "rate_limited_request_count": {
            "type": "integer"
        },
        "last_rate_limited_timestamp": {
            "type": [
                "string",
                "null"
            ]
        },
        "last_request_timestamp": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "subject_type": "generated",
    "subject_name": "generated",
    "subject_id": 10,
    "total_request_count": 19,
    "rate_limited_request_count": 26,
    "last_rate_limited_timestamp": "generated",
    "last_request_timestamp": "generated"
}';

    public function __construct(#[MapFrom('subject_type')]
    public string|null $subjectType, #[MapFrom('subject_name')]
    public string|null $subjectName, #[MapFrom('subject_id')]
    public int|null $subjectId, #[MapFrom('total_request_count')]
    public int|null $totalRequestCount, #[MapFrom('rate_limited_request_count')]
    public int|null $rateLimitedRequestCount, #[MapFrom('last_rate_limited_timestamp')]
    public string|null $lastRateLimitedTimestamp, #[MapFrom('last_request_timestamp')]
    public string|null $lastRequestTimestamp,)
    {
    }
}
