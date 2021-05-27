<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class RateLimitOverview
{
    public const SCHEMA_TITLE = 'Rate Limit Overview';
    public const SCHEMA_DESCRIPTION = 'Rate Limit Overview';
    private array $resources = array();
    private array $rate = array();
    public function resources() : array
    {
        return $this->resources;
    }
    public function rate() : array
    {
        return $this->rate;
    }
}
