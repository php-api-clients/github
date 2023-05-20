<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsCacheList
{
    public const SCHEMA_JSON         = '{"title":"Repository actions caches","required":["total_count","actions_caches"],"type":"object","properties":{"total_count":{"type":"integer","description":"Total number of caches","examples":[2]},"actions_caches":{"type":"array","items":{"type":"object","properties":{"id":{"type":"integer","examples":[2]},"ref":{"type":"string","examples":["refs\\/heads\\/main"]},"key":{"type":"string","examples":["Linux-node-958aff96db2d75d67787d1e634ae70b659de937b"]},"version":{"type":"string","examples":["73885106f58cc52a7df9ec4d4a5622a5614813162cb516c759a30af6bf56e6f0"]},"last_accessed_at":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"created_at":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"size_in_bytes":{"type":"integer","examples":[1024]}}},"description":"Array of caches"}},"description":"Repository actions caches"}';
    public const SCHEMA_TITLE        = 'Repository actions caches';
    public const SCHEMA_DESCRIPTION  = 'Repository actions caches';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":2,"actions_caches":[{"id":2,"ref":"refs\\/heads\\/main","key":"Linux-node-958aff96db2d75d67787d1e634ae70b659de937b","version":"73885106f58cc52a7df9ec4d4a5622a5614813162cb516c759a30af6bf56e6f0","last_accessed_at":"2019-01-24T22:45:36.000Z","created_at":"2019-01-24T22:45:36.000Z","size_in_bytes":1024},{"id":2,"ref":"refs\\/heads\\/main","key":"Linux-node-958aff96db2d75d67787d1e634ae70b659de937b","version":"73885106f58cc52a7df9ec4d4a5622a5614813162cb516c759a30af6bf56e6f0","last_accessed_at":"2019-01-24T22:45:36.000Z","created_at":"2019-01-24T22:45:36.000Z","size_in_bytes":1024}]}';

    /**
     * totalCount: Total number of caches
     * actionsCaches: Array of caches
     */
    public function __construct(#[MapFrom('total_count')] public int $totalCount, #[MapFrom('actions_caches')] public array $actionsCaches)
    {
    }
}
