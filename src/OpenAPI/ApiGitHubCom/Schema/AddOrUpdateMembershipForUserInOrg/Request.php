<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddOrUpdateMembershipForUserInOrg;

final class Request
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"role":{"enum":["member","maintainer"],"type":"string","description":"The role that this user should have in the team.","default":"member"}}}';
    public const SCHEMA_TITLE = 'AddOrUpdateMembershipForUserInOrg\\Request';
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
