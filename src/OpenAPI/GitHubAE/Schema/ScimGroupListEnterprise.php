<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ScimGroupListEnterprise
{
    public const SCHEMA_TITLE = 'scim-group-list-enterprise';
    public const SPL_HASH = '000000001d5ba56800000000544e0d87';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas = array();
    private ?number $totalResults = null;
    private ?number $itemsPerPage = null;
    private ?number $startIndex = null;
    private array $Resources = array();
    public function schemas() : array
    {
        return $this->schemas;
    }
    public function totalResults() : ?number
    {
        return $this->totalResults;
    }
    public function itemsPerPage() : ?number
    {
        return $this->itemsPerPage;
    }
    public function startIndex() : ?number
    {
        return $this->startIndex;
    }
    public function Resources() : array
    {
        return $this->Resources;
    }
}
