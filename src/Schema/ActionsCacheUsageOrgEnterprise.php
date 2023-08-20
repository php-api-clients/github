<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsCacheUsageOrgEnterprise
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_active_caches_count",
        "total_active_caches_size_in_bytes"
    ],
    "type": "object",
    "properties": {
        "total_active_caches_count": {
            "type": "integer",
            "description": "The count of active caches across all repositories of an enterprise or an organization."
        },
        "total_active_caches_size_in_bytes": {
            "type": "integer",
            "description": "The total size in bytes of all active cache items across all repositories of an enterprise or an organization."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_active_caches_count": 25,
    "total_active_caches_size_in_bytes": 33
}';

    /**
     * totalActiveCachesCount: The count of active caches across all repositories of an enterprise or an organization.
     * totalActiveCachesSizeInBytes: The total size in bytes of all active cache items across all repositories of an enterprise or an organization.
     */
    public function __construct(#[MapFrom('total_active_caches_count')]
    public int $totalActiveCachesCount, #[MapFrom('total_active_caches_size_in_bytes')]
    public int $totalActiveCachesSizeInBytes,)
    {
    }
}
