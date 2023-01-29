<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RateLimit
{
    public const SCHEMA_JSON = '{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Rate Limit';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $limit;
    public readonly int $remaining;
    public readonly int $reset;
    public readonly int $used;
    public function __construct(int $limit, int $remaining, int $reset, int $used)
    {
        $this->limit = $limit;
        $this->remaining = $remaining;
        $this->reset = $reset;
        $this->used = $used;
    }
}
