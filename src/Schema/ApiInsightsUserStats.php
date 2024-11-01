<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApiInsightsUserStats
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "actor_type": {
            "type": "string"
        },
        "actor_name": {
            "type": "string"
        },
        "actor_id": {
            "type": "integer",
            "format": "int64"
        },
        "integration_id": {
            "type": [
                "integer",
                "null"
            ],
            "format": "int64"
        },
        "oauth_application_id": {
            "type": [
                "integer",
                "null"
            ],
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
    "actor_type": "generated",
    "actor_name": "generated",
    "actor_id": 8,
    "integration_id": 14,
    "oauth_application_id": 20,
    "total_request_count": 19,
    "rate_limited_request_count": 26,
    "last_rate_limited_timestamp": "generated",
    "last_request_timestamp": "generated"
}';

    public function __construct(#[MapFrom('actor_type')]
    public string|null $actorType, #[MapFrom('actor_name')]
    public string|null $actorName, #[MapFrom('actor_id')]
    public int|null $actorId, #[MapFrom('integration_id')]
    public int|null $integrationId, #[MapFrom('oauth_application_id')]
    public int|null $oauthApplicationId, #[MapFrom('total_request_count')]
    public int|null $totalRequestCount, #[MapFrom('rate_limited_request_count')]
    public int|null $rateLimitedRequestCount, #[MapFrom('last_rate_limited_timestamp')]
    public string|null $lastRateLimitedTimestamp, #[MapFrom('last_request_timestamp')]
    public string|null $lastRequestTimestamp,)
    {
    }
}
