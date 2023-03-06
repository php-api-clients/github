<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CodeScanningAnalysisEnvironment
{
    public const SCHEMA_JSON = '{"type":"string","description":"Identifies the variable values associated with the environment in which this analysis was performed."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Identifies the variable values associated with the environment in which this analysis was performed.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
