<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetMembershipForUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"role":{"enum":["admin","member"],"type":"string","description":"The role to give the user in the organization. Can be one of:  \\n * `admin` - The user will become an owner of the organization.  \\n * `member` - The user will become a non-owner member of the organization.","default":"member"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'SetMembershipForUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The role to give the user in the organization. Can be one of:  
     * `admin` - The user will become an owner of the organization.  
     * `member` - The user will become a non-owner member of the organization.
     */
    public readonly string $role;
    public function __construct(string $role)
    {
        $this->role = $role;
    }
}
