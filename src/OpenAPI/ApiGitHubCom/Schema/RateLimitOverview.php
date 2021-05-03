<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RateLimitOverview
{
    public const SCHEMA_TITLE = 'Rate Limit Overview';
    public const SPL_HASH = '00000000252f40db0000000029de5079';
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
