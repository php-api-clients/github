<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class RateLimit
{
    public const SCHEMA_TITLE = 'Rate Limit';
    public const SPL_HASH = '000000005d4c9f79000000005494ca51';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $limit = null;
    private ?int $remaining = null;
    private ?int $reset = null;
    public function limit() : ?int
    {
        return $this->limit;
    }
    public function remaining() : ?int
    {
        return $this->remaining;
    }
    public function reset() : ?int
    {
        return $this->reset;
    }
}
