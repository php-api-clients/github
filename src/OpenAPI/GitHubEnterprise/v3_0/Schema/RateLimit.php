<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class RateLimit
{
    public const SCHEMA_TITLE = 'Rate Limit';
    public const SPL_HASH = '0000000065dd61a9000000006352672d';
    public const SCHEMA_DESCRIPTION = '';
    private int $limit;
    private int $remaining;
    private int $reset;
    public function limit() : int
    {
        return $this->limit;
    }
    public function remaining() : int
    {
        return $this->remaining;
    }
    public function reset() : int
    {
        return $this->reset;
    }
}
