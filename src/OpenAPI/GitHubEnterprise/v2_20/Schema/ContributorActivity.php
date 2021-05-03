<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class ContributorActivity
{
    public const SCHEMA_TITLE = 'Contributor Activity';
    public const SPL_HASH = '0000000037ddc4a50000000010a967e8';
    public const SCHEMA_DESCRIPTION = 'Contributor Activity';
    private $author;
    private int $total;
    private array $weeks;
    public function author()
    {
        return $this->author;
    }
    public function total() : int
    {
        return $this->total;
    }
    public function weeks() : array
    {
        return $this->weeks;
    }
}
