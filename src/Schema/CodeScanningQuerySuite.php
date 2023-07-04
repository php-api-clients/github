<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningQuerySuite
{
    public const SCHEMA_JSON         = '{"enum":["default","extended"],"type":"string","description":"The CodeQL query suite to use."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The CodeQL query suite to use.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
