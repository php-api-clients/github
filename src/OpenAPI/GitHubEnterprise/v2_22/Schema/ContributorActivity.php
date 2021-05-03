<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ContributorActivity
{
    public const SCHEMA_TITLE = 'Contributor Activity';
    public const SPL_HASH = '000000004a4baeaa0000000021d13a21';
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
