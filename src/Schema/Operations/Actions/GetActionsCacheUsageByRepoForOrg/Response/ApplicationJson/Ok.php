<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{"required":["total_count","repository_cache_usages"],"type":"object","properties":{"total_count":{"type":"integer"},"repository_cache_usages":{"type":"array","items":{"title":"Actions Cache Usage by repository","required":["full_name","active_caches_size_in_bytes","active_caches_count"],"type":"object","properties":{"full_name":{"type":"string","description":"The repository owner and name for the cache usage being shown.","examples":["octo-org\\/Hello-World"]},"active_caches_size_in_bytes":{"type":"integer","description":"The sum of the size in bytes of all the active cache items in the repository.","examples":[2322142]},"active_caches_count":{"type":"integer","description":"The number of active caches in the repository.","examples":[3]}},"description":"GitHub Actions Cache Usage by repository."}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":11,"repository_cache_usages":[{"full_name":"octo-org\\/Hello-World","active_caches_size_in_bytes":2322142,"active_caches_count":3},{"full_name":"octo-org\\/Hello-World","active_caches_size_in_bytes":2322142,"active_caches_count":3}]}';

    public function __construct(#[MapFrom('total_count')] public int $totalCount, #[MapFrom('repository_cache_usages')] public array $repositoryCacheUsages)
    {
    }
}
