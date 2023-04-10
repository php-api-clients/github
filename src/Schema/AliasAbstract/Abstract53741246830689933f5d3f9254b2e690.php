<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract53741246830689933f5d3f9254b2e690
{
    public const SCHEMA_JSON = '{"required":["name","version"],"type":"object","properties":{"guid":{"type":["string","null"]},"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis alert."},"version":{"type":["string","null"],"description":"The version of the tool used to detect the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"guid":"generated_guid_null","name":"generated_name_null","version":"generated_version_null"}';
    /**
     * name: The name of the tool used to generate the code scanning analysis alert.
     * version: The version of the tool used to detect the alert.
     */
    public function __construct(public ?string $guid, public string $name, public ?string $version)
    {
    }
}
