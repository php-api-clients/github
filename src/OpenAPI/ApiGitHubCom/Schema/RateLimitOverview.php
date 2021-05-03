<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RateLimitOverview
{
    public const SCHEMA_TITLE = 'Rate Limit Overview';
    public const SPL_HASH = '0000000020701f2f0000000042193899';
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
