<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class CommitActivity
{
    public const SCHEMA_TITLE = 'Commit Activity';
    public const SPL_HASH = '0000000065d62164000000007ce49c9a';
    public const SCHEMA_DESCRIPTION = 'Commit Activity';
    private array $days;
    private int $total;
    private int $week;
    public function days() : array
    {
        return $this->days;
    }
    public function total() : int
    {
        return $this->total;
    }
    public function week() : int
    {
        return $this->week;
    }
}
