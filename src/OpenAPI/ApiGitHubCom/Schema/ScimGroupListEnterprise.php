<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimGroupListEnterprise
{
    public const SCHEMA_TITLE = 'scim-group-list-enterprise';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas = array();
    private int $totalResults;
    private int $itemsPerPage;
    private int $startIndex;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimGroupListEnterprise\Resources>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimGroupListEnterprise\Resources::class)
     */
    private array $Resources = array();
    public function schemas() : array
    {
        return $this->schemas;
    }
    public function totalResults() : int
    {
        return $this->totalResults;
    }
    public function itemsPerPage() : int
    {
        return $this->itemsPerPage;
    }
    public function startIndex() : int
    {
        return $this->startIndex;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimGroupListEnterprise\Resources>
     */
    public function Resources() : array
    {
        return $this->Resources;
    }
}
