<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Orgs\UpdateMembershipForAuthenticatedUser\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["active"],"type":"string","description":"The state that the membership should be in. Only `\\"active\\"` will be accepted."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"active"}';
    /**
     * state: The state that the membership should be in. Only `"active"` will be accepted.
     */
    public function __construct(public string $state)
    {
    }
}
