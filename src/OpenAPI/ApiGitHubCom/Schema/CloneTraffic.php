<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CloneTraffic
{
    public const SCHEMA_TITLE = 'Clone Traffic';
    public const SCHEMA_DESCRIPTION = 'Clone Traffic';
    private int $count;
    private int $uniques;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic::class)
     */
    private array $clones = array();
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
    public function clones() : array
    {
        return $this->clones;
    }
}
