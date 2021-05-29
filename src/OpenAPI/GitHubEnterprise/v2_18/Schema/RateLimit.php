<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class RateLimit
{
    public const SCHEMA_TITLE       = 'Rate Limit';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $limit             = null;
    private ?int $remaining         = null;
    private ?int $reset             = null;

    public function limit(): ?int
    {
        return $this->limit;
    }

    public function remaining(): ?int
    {
        return $this->remaining;
    }

    public function reset(): ?int
    {
        return $this->reset;
    }
}
