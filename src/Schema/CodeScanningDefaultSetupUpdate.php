<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningDefaultSetupUpdate
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "state": {
            "enum": [
                "configured",
                "not-configured"
            ],
            "type": "string",
            "description": "The desired state of code scanning default setup."
        },
        "query_suite": {
            "enum": [
                "default",
                "extended"
            ],
            "type": "string",
            "description": "CodeQL query suite to be used."
        },
        "languages": {
            "type": "array",
            "items": {
                "enum": [
                    "c-cpp",
                    "csharp",
                    "go",
                    "java-kotlin",
                    "javascript-typescript",
                    "python",
                    "ruby",
                    "swift"
                ],
                "type": "string"
            },
            "description": "CodeQL languages to be analyzed."
        }
    },
    "description": "Configuration for code scanning default setup.",
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Configuration for code scanning default setup.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "state": "configured",
    "query_suite": "default",
    "languages": [
        "generated",
        "generated"
    ]
}';

    /**
     * state: The desired state of code scanning default setup.
     * querySuite: CodeQL query suite to be used.
     * languages: CodeQL languages to be analyzed.
     */
    public function __construct(public string|null $state, #[MapFrom('query_suite')]
    public string|null $querySuite, public array|null $languages,)
    {
    }
}
