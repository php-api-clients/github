<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsCacheUsageOrgEnterprise
{
    public const SCHEMA_JSON = '{"required":["total_active_caches_count","total_active_caches_size_in_bytes"],"type":"object","properties":{"total_active_caches_count":{"type":"integer","description":"The count of active caches across all repositories of an enterprise or an organization."},"total_active_caches_size_in_bytes":{"type":"integer","description":"The total size in bytes of all active cache items across all repositories of an enterprise or an organization."}}}';
    public const SCHEMA_TITLE = 'actions-cache-usage-org-enterprise';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The count of active caches across all repositories of an enterprise or an organization.
     */
    private int $total_active_caches_count;
    /**
     * The total size in bytes of all active cache items across all repositories of an enterprise or an organization.
     */
    private int $total_active_caches_size_in_bytes;
    /**
     * The count of active caches across all repositories of an enterprise or an organization.
     */
    public function total_active_caches_count() : int
    {
        return $this->total_active_caches_count;
    }
    /**
     * The total size in bytes of all active cache items across all repositories of an enterprise or an organization.
     */
    public function total_active_caches_size_in_bytes() : int
    {
        return $this->total_active_caches_size_in_bytes;
    }
}
