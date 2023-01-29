<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\GetActionsCacheUsageByRepoForOrg\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","repository_cache_usages"],"type":"object","properties":{"total_count":{"type":"integer"},"repository_cache_usages":{"type":"array","items":{"title":"Actions Cache Usage by repository","required":["full_name","active_caches_size_in_bytes","active_caches_count"],"type":"object","properties":{"full_name":{"type":"string","description":"The repository owner and name for the cache usage being shown.","examples":["octo-org\\/Hello-World"]},"active_caches_size_in_bytes":{"type":"integer","description":"The sum of the size in bytes of all the active cache items in the repository.","examples":[2322142]},"active_caches_count":{"type":"integer","description":"The number of active caches in the repository.","examples":[3]}},"description":"GitHub Actions Cache Usage by repository."}}}}';
    public const SCHEMA_TITLE = 'Operation\\GetActionsCacheUsageByRepoForOrg\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageByRepository>
     */
    public readonly array $repository_cache_usages;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheUsageByRepository> $repository_cache_usages
     */
    public function __construct(int $total_count, array $repository_cache_usages)
    {
        $this->total_count = $total_count;
        $this->repository_cache_usages = $repository_cache_usages;
    }
}
