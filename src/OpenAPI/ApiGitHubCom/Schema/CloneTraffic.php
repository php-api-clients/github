<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CloneTraffic
{
    public const SCHEMA_TITLE = 'Clone Traffic';
    public const SPL_HASH = '0000000054d5ec200000000071115dec';
    public const SCHEMA_DESCRIPTION = 'Clone Traffic';
    private int $count;
    private int $uniques;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic>
     */
    private array $clones;
    public function count() : int
    {
        return $this->count;
    }
    public function uniques() : int
    {
        return $this->uniques;
    }
    public function clones() : array
    {
        return $this->clones;
    }
}
