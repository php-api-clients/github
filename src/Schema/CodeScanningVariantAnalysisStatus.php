<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningVariantAnalysisStatus
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "pending",
        "in_progress",
        "succeeded",
        "failed",
        "canceled",
        "timed_out"
    ],
    "type": "string",
    "description": "The new status of the CodeQL variant analysis repository task."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The new status of the CodeQL variant analysis repository task.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
