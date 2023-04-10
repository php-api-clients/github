<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class DependabotAlertPackage
{
    public const SCHEMA_JSON = '{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Details for the vulnerable package.';
    public const SCHEMA_EXAMPLE_DATA = '{"ecosystem":"generated_ecosystem_null","name":"generated_name_null"}';
    /**
     * ecosystem: The package's language or package management ecosystem.
     * name: The unique package name within its ecosystem.
     */
    public function __construct(public string $ecosystem, public string $name)
    {
    }
}
