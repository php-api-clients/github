<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Projects\CreateForAuthenticatedUser\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
