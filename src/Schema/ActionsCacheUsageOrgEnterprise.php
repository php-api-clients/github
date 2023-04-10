<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ActionsCacheUsageOrgEnterprise
{
    public const SCHEMA_JSON = '{"required":["total_active_caches_count","total_active_caches_size_in_bytes"],"type":"object","properties":{"total_active_caches_count":{"type":"integer","description":"The count of active caches across all repositories of an enterprise or an organization."},"total_active_caches_size_in_bytes":{"type":"integer","description":"The total size in bytes of all active cache items across all repositories of an enterprise or an organization."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_active_caches_count":13,"total_active_caches_size_in_bytes":13}';
    /**
     * totalActiveCachesCount: The count of active caches across all repositories of an enterprise or an organization.
     * totalActiveCachesSizeInBytes: The total size in bytes of all active cache items across all repositories of an enterprise or an organization.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_active_caches_count')] public int $totalActiveCachesCount, #[\EventSauce\ObjectHydrator\MapFrom('total_active_caches_size_in_bytes')] public int $totalActiveCachesSizeInBytes)
    {
    }
}
