<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
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
