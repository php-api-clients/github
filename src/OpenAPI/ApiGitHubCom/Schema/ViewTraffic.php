<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ViewTraffic
{
    public const SCHEMA_TITLE = 'View Traffic';
    public const SPL_HASH = '000000002070149a0000000042193899';
    public const SCHEMA_DESCRIPTION = 'View Traffic';
    private int $count;
    private int $uniques;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic>
     */
    private array $views;
    public function count() : int
    {
        return $this->count;
    }
    public function uniques() : int
    {
        return $this->uniques;
    }
    public function views() : array
    {
        return $this->views;
    }
}
