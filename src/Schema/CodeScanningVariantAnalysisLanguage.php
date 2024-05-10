<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningVariantAnalysisLanguage
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "cpp",
        "csharp",
        "go",
        "java",
        "javascript",
        "python",
        "ruby",
        "swift"
    ],
    "type": "string",
    "description": "The language targeted by the CodeQL query"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The language targeted by the CodeQL query';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
