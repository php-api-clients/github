<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimUserList
{
    public const SCHEMA_TITLE = 'SCIM User List';
    public const SPL_HASH = '00000000207015100000000042193899';
    public const SCHEMA_DESCRIPTION = 'SCIM User List';
    /**
     * SCIM schema used.
     */
    private array $schemas;
    private int $totalResults;
    private int $itemsPerPage;
    private int $startIndex;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser>
     */
    private array $Resources;
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
    public function Resources() : array
    {
        return $this->Resources;
    }
}
