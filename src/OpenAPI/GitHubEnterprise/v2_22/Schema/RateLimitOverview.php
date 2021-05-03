<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class RateLimitOverview
{
    public const SCHEMA_TITLE = 'Rate Limit Overview';
    public const SPL_HASH = '000000004a4ba66f0000000021d13a21';
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
