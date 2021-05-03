<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimUserList
{
    public const SCHEMA_TITLE = 'SCIM User List';
    public const SPL_HASH = '00000000084e1fec0000000020f58f84';
    public const SCHEMA_DESCRIPTION = 'SCIM User List';
    /**
     * SCIM schema used.
     */
    private array $schemas = array();
    private ?int $totalResults = null;
    private ?int $itemsPerPage = null;
    private ?int $startIndex = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser>
     */
    private array $Resources = array();
    public function schemas() : array
    {
        return $this->schemas;
    }
    public function totalResults() : ?int
    {
        return $this->totalResults;
    }
    public function itemsPerPage() : ?int
    {
        return $this->itemsPerPage;
    }
    public function startIndex() : ?int
    {
        return $this->startIndex;
    }
    public function Resources() : array
    {
        return $this->Resources;
    }
}
