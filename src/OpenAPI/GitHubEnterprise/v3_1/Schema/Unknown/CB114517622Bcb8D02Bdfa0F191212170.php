<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CB114517622Bcb8D02Bdfa0F191212170
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enforcement":{"enum":["enabled","disabled","testing"],"type":"string","description":"The state of enforcement for the hook on this repository."}}}';
    public const SCHEMA_TITLE = 'c_b114517622bcb8d02bdfa0f191212170';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The state of enforcement for the hook on this repository.
     */
    private string $enforcement;
    /**
     * The state of enforcement for the hook on this repository.
     */
    public function enforcement() : string
    {
        return $this->enforcement;
    }
}
