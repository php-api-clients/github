<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningAutofixStatus
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "pending",
        "error",
        "success",
        "outdated"
    ],
    "type": "string",
    "description": "The status of an autofix."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The status of an autofix.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
