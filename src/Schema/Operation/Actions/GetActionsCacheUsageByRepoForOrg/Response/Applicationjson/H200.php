<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operation\Actions\GetActionsCacheUsageByRepoForOrg\Response\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","repository_cache_usages"],"type":"object","properties":{"total_count":{"type":"integer"},"repository_cache_usages":{"type":"array","items":{"title":"Actions Cache Usage by repository","required":["full_name","active_caches_size_in_bytes","active_caches_count"],"type":"object","properties":{"full_name":{"type":"string","description":"The repository owner and name for the cache usage being shown.","examples":["octo-org\\/Hello-World"]},"active_caches_size_in_bytes":{"type":"integer","description":"The sum of the size in bytes of all the active cache items in the repository.","examples":[2322142]},"active_caches_count":{"type":"integer","description":"The number of active caches in the repository.","examples":[3]}},"description":"GitHub Actions Cache Usage by repository."}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"repository_cache_usages":[{"full_name":"octo-org\\/Hello-World","active_caches_size_in_bytes":2322142,"active_caches_count":3}]}';
    /**
     * @param array<\ApiClients\Client\GitHub\Schema\ActionsCacheUsageByRepository> $repositoryCacheUsages
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_count')] public int $totalCount, #[\EventSauce\ObjectHydrator\MapFrom('repository_cache_usages')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ActionsCacheUsageByRepository::class)] public array $repositoryCacheUsages)
    {
    }
}
