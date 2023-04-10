<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Projects\CreateForAuthenticatedUser\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the project","examples":["Week One Sprint"]},"body":{"type":["string","null"],"description":"Body of the project","examples":["This project represents the sprint of the first week in January"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"Week One Sprint","body":"This project represents the sprint of the first week in January"}';
    /**
     * name: Name of the project
     * body: Body of the project
     */
    public function __construct(public string $name, public ?string $body)
    {
    }
}
