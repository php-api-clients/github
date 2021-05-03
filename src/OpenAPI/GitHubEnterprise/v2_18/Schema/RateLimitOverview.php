<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class RateLimitOverview
{
    public const SCHEMA_TITLE = 'Rate Limit Overview';
    public const SPL_HASH = '000000002eab646400000000697c5254';
    public const SCHEMA_DESCRIPTION = 'Rate Limit Overview';
    private object $resources;
    private object $rate;
    public function resources() : object
    {
        return $this->resources;
    }
    public function rate() : object
    {
        return $this->rate;
    }
}
