<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsCacheUsageByRepository
{
    public const SCHEMA_TITLE = 'Actions Cache Usage by repository';
    public const SCHEMA_DESCRIPTION = 'GitHub Actions Cache Usage by repository.';
    /**
     * The repository owner and name for the cache usage being shown.
     */
    private string $full_name;
    /**
     * The sum of the size in bytes of all the active cache items in the repository.
     */
    private int $active_caches_size_in_bytes;
    /**
     * The number of active caches in the repository.
     */
    private int $active_caches_count;
    /**
     * The repository owner and name for the cache usage being shown.
     */
    public function full_name() : string
    {
        return $this->full_name;
    }
    /**
     * The sum of the size in bytes of all the active cache items in the repository.
     */
    public function active_caches_size_in_bytes() : int
    {
        return $this->active_caches_size_in_bytes;
    }
    /**
     * The number of active caches in the repository.
     */
    public function active_caches_count() : int
    {
        return $this->active_caches_count;
    }
}
