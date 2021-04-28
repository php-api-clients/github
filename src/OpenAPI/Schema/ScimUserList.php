<?php

namespace ApiClients\Client\Github\OpenAPI\Schema;

final class ScimUserList
{
    public const SCHEMA_TITLE = 'SCIM User List';
    public const SCHEMA_DESCRIPTION = 'SCIM User List';
    /**SCIM schema used.**/
    private array $schemas;
    private int $totalResults;
    private int $itemsPerPage;
    private int $startIndex;
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
