<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimUserListEnterprise
{
    public const SCHEMA_TITLE = 'scim-user-list-enterprise';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas = array();
    private number $totalResults;
    private number $itemsPerPage;
    private number $startIndex;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUserListEnterprise\Resources>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUserListEnterprise\Resources::class)
     */
    private array $Resources = array();
    public function schemas() : array
    {
        return $this->schemas;
    }
    public function totalResults() : number
    {
        return $this->totalResults;
    }
    public function itemsPerPage() : number
    {
        return $this->itemsPerPage;
    }
    public function startIndex() : number
    {
        return $this->startIndex;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUserListEnterprise\Resources>
     */
    public function Resources() : array
    {
        return $this->Resources;
    }
}
