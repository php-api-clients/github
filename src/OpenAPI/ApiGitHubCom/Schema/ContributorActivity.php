<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ContributorActivity
{
    public const SCHEMA_TITLE = 'Contributor Activity';
    public const SPL_HASH = '000000000cd535c50000000040effa88';
    public const SCHEMA_DESCRIPTION = 'Contributor Activity';
    private $author;
    private ?int $total = null;
    private array $weeks = array();
    public function author()
    {
        return $this->author;
    }
    public function total() : ?int
    {
        return $this->total;
    }
    public function weeks() : array
    {
        return $this->weeks;
    }
}
