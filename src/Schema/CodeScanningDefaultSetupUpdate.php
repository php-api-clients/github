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
        "runner_type": {
            "enum": [
                "standard",
                "labeled"
            ],
            "type": "string",
            "description": "Runner type to be used."
        },
        "runner_label": {
            "type": [
                "string",
                "null"
            ],
            "description": "Runner label to be used if the runner type is labeled.",
            "examples": [
                "code-scanning"
            ]
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
                    "actions",
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
    "runner_type": "standard",
    "runner_label": "code-scanning",
    "query_suite": "default",
    "languages": [
        "generated",
        "generated"
    ]
}';

    /**
     * state: The desired state of code scanning default setup.
     * runnerType: Runner type to be used.
     * runnerLabel: Runner label to be used if the runner type is labeled.
     * querySuite: CodeQL query suite to be used.
     * languages: CodeQL languages to be analyzed.
     */
    public function __construct(public string|null $state, #[MapFrom('runner_type')]
    public string|null $runnerType, #[MapFrom('runner_label')]
    public string|null $runnerLabel, #[MapFrom('query_suite')]
    public string|null $querySuite, public array|null $languages,)
    {
    }
}
