<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class ActionsCacheUsageOrgEnterprise
{
    public const SCHEMA_JSON = '{"required":["total_active_caches_count","total_active_caches_size_in_bytes"],"type":"object","properties":{"total_active_caches_count":{"type":"integer","description":"The count of active caches across all repositories of an enterprise or an organization."},"total_active_caches_size_in_bytes":{"type":"integer","description":"The total size in bytes of all active cache items across all repositories of an enterprise or an organization."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The count of active caches across all repositories of an enterprise or an organization.
     */
    public ?int $total_active_caches_count;
    /**
     * The total size in bytes of all active cache items across all repositories of an enterprise or an organization.
     */
    public ?int $total_active_caches_size_in_bytes;
    public function __construct(int $total_active_caches_count, int $total_active_caches_size_in_bytes)
    {
        $this->total_active_caches_count = $total_active_caches_count;
        $this->total_active_caches_size_in_bytes = $total_active_caches_size_in_bytes;
    }
}
