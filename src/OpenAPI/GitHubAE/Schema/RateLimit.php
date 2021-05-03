<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class RateLimit
{
    public const SCHEMA_TITLE = 'Rate Limit';
    public const SPL_HASH = '000000001d5badfd00000000544e0d87';
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
