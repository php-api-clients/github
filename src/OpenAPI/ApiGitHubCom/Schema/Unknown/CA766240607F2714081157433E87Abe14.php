<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CA766240607F2714081157433E87Abe14
{
    public const SCHEMA_JSON = '{"required":["total_count","repository_cache_usages"],"type":"object","properties":{"total_count":{"type":"integer"},"repository_cache_usages":{"type":"array","items":{"title":"Actions Cache Usage by repository","required":["full_name","active_caches_size_in_bytes","active_caches_count"],"type":"object","properties":{"full_name":{"type":"string","description":"The repository owner and name for the cache usage being shown.","examples":["octo-org\\/Hello-World"]},"active_caches_size_in_bytes":{"type":"integer","description":"The sum of the size in bytes of all the active cache items in the repository.","examples":[2322142]},"active_caches_count":{"type":"integer","description":"The number of active caches in the repository.","examples":[3]}},"description":"GitHub Actions Cache Usage by repository."}}}}';
    public const SCHEMA_TITLE = 'c_a766240607f2714081157433e87abe14';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageByRepository>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageByRepository::class)
     */
    private array $repository_cache_usages = array();
    public function total_count() : int
    {
        return $this->total_count;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageByRepository>
     */
    public function repository_cache_usages() : array
    {
        return $this->repository_cache_usages;
    }
}
