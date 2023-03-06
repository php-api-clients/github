<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ActionsCacheUsageByRepository
{
    public const SCHEMA_JSON = '{"title":"Actions Cache Usage by repository","required":["full_name","active_caches_size_in_bytes","active_caches_count"],"type":"object","properties":{"full_name":{"type":"string","description":"The repository owner and name for the cache usage being shown.","examples":["octo-org\\/Hello-World"]},"active_caches_size_in_bytes":{"type":"integer","description":"The sum of the size in bytes of all the active cache items in the repository.","examples":[2322142]},"active_caches_count":{"type":"integer","description":"The number of active caches in the repository.","examples":[3]}},"description":"GitHub Actions Cache Usage by repository."}';
    public const SCHEMA_TITLE = 'Actions Cache Usage by repository';
    public const SCHEMA_DESCRIPTION = 'GitHub Actions Cache Usage by repository.';
    public const SCHEMA_EXAMPLE_DATA = '{"full_name":"octo-org\\/Hello-World","active_caches_size_in_bytes":2322142,"active_caches_count":3}';
    /**
     * full_name: The repository owner and name for the cache usage being shown.
     * active_caches_size_in_bytes: The sum of the size in bytes of all the active cache items in the repository.
     * active_caches_count: The number of active caches in the repository.
     */
    public function __construct(public ?string $full_name, public ?int $active_caches_size_in_bytes, public ?int $active_caches_count)
    {
    }
}
