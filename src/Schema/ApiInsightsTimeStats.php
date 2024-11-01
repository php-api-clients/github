<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApiInsightsTimeStats
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "timestamp": {
            "type": "string"
        },
        "total_request_count": {
            "type": "integer",
            "format": "int64"
        },
        "rate_limited_request_count": {
            "type": "integer",
            "format": "int64"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "timestamp": "generated",
    "total_request_count": 19,
    "rate_limited_request_count": 26
}';

    public function __construct(public string|null $timestamp, #[MapFrom('total_request_count')]
    public int|null $totalRequestCount, #[MapFrom('rate_limited_request_count')]
    public int|null $rateLimitedRequestCount,)
    {
    }
}
