<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class CodeScanningAnalysisToolVersion
{
    public const SCHEMA_JSON = '{"type":["string","null"],"description":"The version of the tool used to generate the code scanning analysis."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The version of the tool used to generate the code scanning analysis.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
