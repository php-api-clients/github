<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class RateLimit
{
    public const SCHEMA_JSON = '{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Rate Limit';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $limit;
    public ?int $remaining;
    public ?int $reset;
    public ?int $used;
    public function __construct(int $limit, int $remaining, int $reset, int $used)
    {
        $this->limit = $limit;
        $this->remaining = $remaining;
        $this->reset = $reset;
        $this->used = $used;
    }
}
