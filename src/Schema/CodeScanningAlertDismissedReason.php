<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningAlertDismissedReason
{
    public const SCHEMA_JSON         = '{
    "enum": [
        null,
        "false positive",
        "won\'t fix",
        "used in tests"
    ],
    "type": [
        "string",
        "null"
    ],
    "description": "**Required when the state is dismissed.** The reason for dismissing or closing the alert."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '**Required when the state is dismissed.** The reason for dismissing or closing the alert.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
