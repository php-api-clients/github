<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningAlertSeverity
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "critical",
        "high",
        "medium",
        "low",
        "warning",
        "note",
        "error"
    ],
    "type": "string",
    "description": "Severity of a code scanning alert."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Severity of a code scanning alert.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
