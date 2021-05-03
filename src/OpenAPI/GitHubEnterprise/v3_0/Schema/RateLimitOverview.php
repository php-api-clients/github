<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class RateLimitOverview
{
    public const SCHEMA_TITLE = 'Rate Limit Overview';
    public const SPL_HASH = '0000000065dd6195000000006352672d';
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
