<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ViewTraffic
{
    public const SCHEMA_TITLE = 'View Traffic';
    public const SPL_HASH = '00000000084e1e660000000020f58f84';
    public const SCHEMA_DESCRIPTION = 'View Traffic';
    private ?int $count = null;
    private ?int $uniques = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic>
     */
    private array $views = array();
    public function count() : ?int
    {
        return $this->count;
    }
    public function uniques() : ?int
    {
        return $this->uniques;
    }
    public function views() : array
    {
        return $this->views;
    }
}
