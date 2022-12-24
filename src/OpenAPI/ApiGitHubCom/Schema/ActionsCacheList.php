<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsCacheList
{
    public const SCHEMA_JSON = '{"title":"Repository actions caches","required":["total_count","actions_caches"],"type":"object","properties":{"total_count":{"type":"integer","description":"Total number of caches","examples":[2]},"actions_caches":{"type":"array","items":{"type":"object","properties":{"id":{"type":"integer","examples":[2]},"ref":{"type":"string","examples":["refs\\/heads\\/main"]},"key":{"type":"string","examples":["Linux-node-958aff96db2d75d67787d1e634ae70b659de937b"]},"version":{"type":"string","examples":["73885106f58cc52a7df9ec4d4a5622a5614813162cb516c759a30af6bf56e6f0"]},"last_accessed_at":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"created_at":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"size_in_bytes":{"type":"integer","examples":[1024]}}},"description":"Array of caches"}},"description":"Repository actions caches"}';
    public const SCHEMA_TITLE = 'Repository actions caches';
    public const SCHEMA_DESCRIPTION = 'Repository actions caches';
    /**
     * Total number of caches
     */
    private int $total_count;
    /**
     * Array of caches
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C480B5Bdc17827754C1Cd26D66Aed1426>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C480B5Bdc17827754C1Cd26D66Aed1426::class)
     */
    private array $actions_caches = array();
    /**
     * Total number of caches
     */
    public function total_count() : int
    {
        return $this->total_count;
    }
    /**
     * Array of caches
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C480B5Bdc17827754C1Cd26D66Aed1426>
     */
    public function actions_caches() : array
    {
        return $this->actions_caches;
    }
}
