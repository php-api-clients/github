<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class CommitActivity
{
    public const SCHEMA_TITLE = 'Commit Activity';
    public const SPL_HASH = '000000002cadef0a00000000748d5a43';
    public const SCHEMA_DESCRIPTION = 'Commit Activity';
    private array $days = array();
    private ?int $total = null;
    private ?int $week = null;
    public function days() : array
    {
        return $this->days;
    }
    public function total() : ?int
    {
        return $this->total;
    }
    public function week() : ?int
    {
        return $this->week;
    }
}
