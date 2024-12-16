<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningAutofixDescription
{
    public const SCHEMA_JSON         = '{
    "type": [
        "string",
        "null"
    ],
    "description": "The description of an autofix."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The description of an autofix.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
