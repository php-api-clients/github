<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class RateLimitOverview
{
    public const SCHEMA_TITLE = 'Rate Limit Overview';
    public const SPL_HASH = '000000000c92e5b5000000006ad867a6';
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
