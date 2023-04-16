<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Projects\AddCollaborator\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
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
