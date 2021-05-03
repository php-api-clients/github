<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class RateLimitOverview
{
    public const SCHEMA_TITLE = 'Rate Limit Overview';
    public const SPL_HASH = '000000006312f80b0000000044ad25fc';
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
