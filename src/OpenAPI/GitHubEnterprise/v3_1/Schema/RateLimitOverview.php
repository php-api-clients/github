<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class RateLimitOverview
{
    public const SCHEMA_TITLE       = 'Rate Limit Overview';
    public const SCHEMA_DESCRIPTION = 'Rate Limit Overview';
    private array $resources        = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RateLimit::class) */
    private RateLimit $rate = [];

    public function resources(): array
    {
        return $this->resources;
    }

    public function rate(): RateLimit
    {
        return $this->rate;
    }
}