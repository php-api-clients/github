<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class RateLimit
{
    public const SCHEMA_TITLE = 'Rate Limit';
    public const SPL_HASH = '000000000c1ce6a80000000065732ccc';
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
