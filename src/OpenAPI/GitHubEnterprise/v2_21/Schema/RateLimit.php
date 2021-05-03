<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class RateLimit
{
    public const SCHEMA_TITLE = 'Rate Limit';
    public const SPL_HASH = '0000000065d65a44000000007ce49c9a';
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
