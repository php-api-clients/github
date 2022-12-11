<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsCacheList
{
    public const SCHEMA_TITLE = 'Repository actions caches';
    public const SCHEMA_DESCRIPTION = 'Repository actions caches';
    /**
     * Total number of caches
     */
    private int $total_count;
    /**
     * Array of caches
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheList\ActionsCaches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheList\ActionsCaches::class)
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
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheList\ActionsCaches>
     */
    public function actions_caches() : array
    {
        return $this->actions_caches;
    }
}
