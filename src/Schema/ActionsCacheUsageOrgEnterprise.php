<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ActionsCacheUsageOrgEnterprise
{
    public const SCHEMA_JSON = '{"required":["total_active_caches_count","total_active_caches_size_in_bytes"],"type":"object","properties":{"total_active_caches_count":{"type":"integer","description":"The count of active caches across all repositories of an enterprise or an organization."},"total_active_caches_size_in_bytes":{"type":"integer","description":"The total size in bytes of all active cache items across all repositories of an enterprise or an organization."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"totalActiveCachesCount":13,"totalActiveCachesSizeInBytes":13}';
    /**
     * totalActiveCachesCount: The count of active caches across all repositories of an enterprise or an organization.
     * totalActiveCachesSizeInBytes: The total size in bytes of all active cache items across all repositories of an enterprise or an organization.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_active_caches_count')] public int $totalActiveCachesCount, #[\EventSauce\ObjectHydrator\MapFrom('total_active_caches_size_in_bytes')] public int $totalActiveCachesSizeInBytes)
    {
    }
}
