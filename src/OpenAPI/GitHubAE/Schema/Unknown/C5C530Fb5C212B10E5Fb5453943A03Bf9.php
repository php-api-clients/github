<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C5C530Fb5C212B10E5Fb5453943A03Bf9
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["active"],"type":"string","description":"The state that the membership should be in. Only `\\"active\\"` will be accepted."}}}';
    public const SCHEMA_TITLE = 'c_5c530fb5c212b10e5fb5453943a03bf9';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The state that the membership should be in. Only `"active"` will be accepted.
     */
    private string $state;
    /**
     * The state that the membership should be in. Only `"active"` will be accepted.
     */
    public function state() : string
    {
        return $this->state;
    }
}
