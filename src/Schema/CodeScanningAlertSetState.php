<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningAlertSetState
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "open",
        "dismissed"
    ],
    "type": "string",
    "description": "Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
