<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CC23F2Af09E530976A2E3984A52070677
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"role":{"enum":["member","maintainer"],"type":"string","description":"The role that this user should have in the team.","default":"member"}}}';
    public const SCHEMA_TITLE = 'c_c23f2af09e530976a2e3984a52070677';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The role that this user should have in the team.
     */
    private string $role;
    /**
     * The role that this user should have in the team.
     */
    public function role() : string
    {
        return $this->role;
    }
}
