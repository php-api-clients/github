<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApiInsightsRouteStats
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "http_method": {
            "type": "string",
            "description": "The HTTP method"
        },
        "api_route": {
            "type": "string",
            "description": "The API path\'s route template"
        },
        "total_request_count": {
            "type": "integer",
            "description": "The total number of requests within the queried time period",
            "format": "int64"
        },
        "rate_limited_request_count": {
            "type": "integer",
            "description": "The total number of requests that were rate limited within the queried time period",
            "format": "int64"
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
    "http_method": "generated",
    "api_route": "generated",
    "total_request_count": 19,
    "rate_limited_request_count": 26,
    "last_rate_limited_timestamp": "generated",
    "last_request_timestamp": "generated"
}';

    /**
     * httpMethod: The HTTP method
     * apiRoute: The API path's route template
     * totalRequestCount: The total number of requests within the queried time period
     * rateLimitedRequestCount: The total number of requests that were rate limited within the queried time period
     */
    public function __construct(#[MapFrom('http_method')]
    public string|null $httpMethod, #[MapFrom('api_route')]
    public string|null $apiRoute, #[MapFrom('total_request_count')]
    public int|null $totalRequestCount, #[MapFrom('rate_limited_request_count')]
    public int|null $rateLimitedRequestCount, #[MapFrom('last_rate_limited_timestamp')]
    public string|null $lastRateLimitedTimestamp, #[MapFrom('last_request_timestamp')]
    public string|null $lastRequestTimestamp,)
    {
    }
}
