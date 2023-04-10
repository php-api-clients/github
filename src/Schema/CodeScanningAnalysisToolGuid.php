<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class CodeScanningAnalysisToolGuid
{
    public const SCHEMA_JSON = '{"type":["string","null"],"description":"The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
