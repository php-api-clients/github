<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class CodeScanningAnalysisTool
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis."},"version":{"type":["string","null"],"description":"The version of the tool used to generate the code scanning analysis."},"guid":{"type":["string","null"],"description":"The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","version":"generated_version_null","guid":"generated_guid_null"}';
    /**
     * name: The name of the tool used to generate the code scanning analysis.
     * version: The version of the tool used to generate the code scanning analysis.
     * guid: The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data.
     */
    public function __construct(public ?string $name, public ?string $version, public ?string $guid)
    {
    }
}
