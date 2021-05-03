<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ContributorActivity
{
    public const SCHEMA_TITLE = 'Contributor Activity';
    public const SPL_HASH = '000000005dfdda420000000040885a06';
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
