<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ContributorActivity
{
    public const SCHEMA_TITLE = 'Contributor Activity';
    public const SPL_HASH = '000000001f1e3c84000000004be6709d';
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
