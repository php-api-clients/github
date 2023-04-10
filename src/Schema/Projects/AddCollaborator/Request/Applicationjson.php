<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Projects\AddCollaborator\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"permission":{"enum":["read","write","admin"],"type":"string","description":"The permission to grant the collaborator.","default":"write","examples":["write"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"permission":"write"}';
    /**
     * permission: The permission to grant the collaborator.
     */
    public function __construct(public ?string $permission)
    {
    }
}
