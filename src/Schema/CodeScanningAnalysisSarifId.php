<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CodeScanningAnalysisSarifId
{
    public const SCHEMA_JSON = '{"type":"string","description":"An identifier for the upload.","examples":["6c81cd8e-b078-4ac3-a3be-1dad7dbd0b53"]}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'An identifier for the upload.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
