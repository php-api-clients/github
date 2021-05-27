<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class RateLimitOverview
{
    public const SCHEMA_TITLE = 'Rate Limit Overview';
    public const SCHEMA_DESCRIPTION = 'Rate Limit Overview';
    private ?object $resources = null;
    private ?object $rate = null;
    public function resources() : ?object
    {
        return $this->resources;
    }
    public function rate() : ?object
    {
        return $this->rate;
    }
}
