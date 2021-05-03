<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimUserListEnterprise
{
    public const SCHEMA_TITLE = 'scim-user-list-enterprise';
    public const SPL_HASH = '00000000252f4b1c0000000029de5079';
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
