<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class RateLimitOverview
{
    public const SCHEMA_TITLE       = 'Rate Limit Overview';
    public const SCHEMA_DESCRIPTION = 'Rate Limit Overview';
    private array $resources        = [];
    private array $rate             = [];

    public function resources(): array
    {
        return $this->resources;
    }

    public function rate(): array
    {
        return $this->rate;
    }
}
