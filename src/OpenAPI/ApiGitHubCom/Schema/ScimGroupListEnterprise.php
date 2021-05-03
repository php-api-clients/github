<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimGroupListEnterprise
{
    public const SCHEMA_TITLE = 'scim-group-list-enterprise';
    public const SPL_HASH = '00000000207014930000000042193899';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas;
    private number $totalResults;
    private number $itemsPerPage;
    private number $startIndex;
    private array $Resources;
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
    public function Resources() : array
    {
        return $this->Resources;
    }
}
