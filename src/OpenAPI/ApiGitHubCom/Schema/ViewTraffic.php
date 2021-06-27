<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ViewTraffic
{
    public const SCHEMA_TITLE = 'View Traffic';
    public const SCHEMA_DESCRIPTION = 'View Traffic';
    private int $count;
    private int $uniques;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic::class)
     */
    private array $views = array();
    public function count() : int
    {
        return $this->count;
    }
    public function uniques() : int
    {
        return $this->uniques;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic>
     */
    public function views() : array
    {
        return $this->views;
    }
}
