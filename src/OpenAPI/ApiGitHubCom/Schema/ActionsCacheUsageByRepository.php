<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsCacheUsageByRepository
{
    public const SCHEMA_JSON = '{"title":"Actions Cache Usage by repository","required":["full_name","active_caches_size_in_bytes","active_caches_count"],"type":"object","properties":{"full_name":{"type":"string","description":"The repository owner and name for the cache usage being shown.","examples":["octo-org\\/Hello-World"]},"active_caches_size_in_bytes":{"type":"integer","description":"The sum of the size in bytes of all the active cache items in the repository.","examples":[2322142]},"active_caches_count":{"type":"integer","description":"The number of active caches in the repository.","examples":[3]}},"description":"GitHub Actions Cache Usage by repository."}';
    public const SCHEMA_EXAMPLE = '{"full_name":"octo-org\\/Hello-World","active_caches_size_in_bytes":2322142,"active_caches_count":3}';
    public const SCHEMA_TITLE = 'Actions Cache Usage by repository';
    public const SCHEMA_DESCRIPTION = 'GitHub Actions Cache Usage by repository.';
    /**
     * The repository owner and name for the cache usage being shown.
     */
    public readonly string $full_name;
    /**
     * The sum of the size in bytes of all the active cache items in the repository.
     */
    public readonly int $active_caches_size_in_bytes;
    /**
     * The number of active caches in the repository.
     */
    public readonly int $active_caches_count;
    public function __construct(string $full_name, int $active_caches_size_in_bytes, int $active_caches_count)
    {
        $this->full_name = $full_name;
        $this->active_caches_size_in_bytes = $active_caches_size_in_bytes;
        $this->active_caches_count = $active_caches_count;
    }
}
