<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CommitActivity
{
    public const SCHEMA_TITLE = 'Commit Activity';
    public const SPL_HASH = '0000000054d5ecdc0000000071115dec';
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
