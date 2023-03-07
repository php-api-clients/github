<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Projects\UpdateColumn\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the project column","examples":["Remaining tasks"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"Remaining tasks"}';
    /**
     * name: Name of the project column
     */
    public function __construct(public ?string $name)
    {
    }
}
