<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CommitActivity
{
    public const SCHEMA_TITLE = 'Commit Activity';
    public const SPL_HASH = '000000004a4baea10000000021d13a21';
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
