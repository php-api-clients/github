<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Orgs\SetMembershipForUser\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"role":{"enum":["admin","member"],"type":"string","description":"The role to give the user in the organization. Can be one of:  \\n * `admin` - The user will become an owner of the organization.  \\n * `member` - The user will become a non-owner member of the organization.","default":"member"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"role":"admin"}';
    /**
     * role: The role to give the user in the organization. Can be one of:  
     * `admin` - The user will become an owner of the organization.  
     * `member` - The user will become a non-owner member of the organization.
     */
    public function __construct(public ?string $role)
    {
    }
}
