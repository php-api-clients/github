<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApiInsightsSummaryStats
{
    public const SCHEMA_JSON         = '{
    "title": "Summary Stats",
    "type": "object",
    "properties": {
        "total_request_count": {
            "type": "integer",
            "description": "The total number of requests within the queried time period",
            "format": "int64"
        },
        "rate_limited_request_count": {
            "type": "integer",
            "description": "The total number of requests that were rate limited within the queried time period",
            "format": "int64"
        }
    },
    "description": "API Insights usage summary stats for an organization"
}';
    public const SCHEMA_TITLE        = 'Summary Stats';
    public const SCHEMA_DESCRIPTION  = 'API Insights usage summary stats for an organization';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_request_count": 19,
    "rate_limited_request_count": 26
}';

    /**
     * totalRequestCount: The total number of requests within the queried time period
     * rateLimitedRequestCount: The total number of requests that were rate limited within the queried time period
     */
    public function __construct(#[MapFrom('total_request_count')]
    public int|null $totalRequestCount, #[MapFrom('rate_limited_request_count')]
    public int|null $rateLimitedRequestCount,)
    {
    }
}
