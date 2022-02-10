<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RateLimitOverview
{
    public const SCHEMA_TITLE = 'Rate Limit Overview';
    public const SCHEMA_DESCRIPTION = 'Rate Limit Overview';
    private array $resources = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $rate;
    public function resources() : array
    {
        return $this->resources;
    }
    public function rate() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit
    {
        return $this->rate;
    }
}
