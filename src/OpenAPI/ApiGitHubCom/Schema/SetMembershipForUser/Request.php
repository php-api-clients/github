<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetMembershipForUser;

final class Request
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"role":{"enum":["admin","member"],"type":"string","description":"The role to give the user in the organization. Can be one of:  \\n\\\\* `admin` - The user will become an owner of the organization.  \\n\\\\* `member` - The user will become a non-owner member of the organization.","default":"member"}}}';
    public const SCHEMA_TITLE = 'SetMembershipForUser\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
    * The role to give the user in the organization. Can be one of:  
    \* `admin` - The user will become an owner of the organization.  
    \* `member` - The user will become a non-owner member of the organization.
    */
    private string $role;
    /**
    * The role to give the user in the organization. Can be one of:  
    \* `admin` - The user will become an owner of the organization.  
    \* `member` - The user will become a non-owner member of the organization.
    */
    public function role() : string
    {
        return $this->role;
    }
}
