<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddOrUpdateMembershipForUserInOrg\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"role":{"enum":["member","maintainer"],"type":"string","description":"The role that this user should have in the team.","default":"member"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'AddOrUpdateMembershipForUserInOrg\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The role that this user should have in the team.
     */
    public readonly string $role;
    public function __construct(string $role)
    {
        $this->role = $role;
    }
}
