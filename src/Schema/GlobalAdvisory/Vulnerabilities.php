<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\GlobalAdvisory;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Vulnerabilities
{
    public const SCHEMA_JSON         = '{
    "required": [
        "package",
        "vulnerable_version_range",
        "first_patched_version",
        "vulnerable_functions"
    ],
    "type": "object",
    "properties": {
        "package": {
            "required": [
                "ecosystem",
                "name"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "ecosystem": {
                    "enum": [
                        "rubygems",
                        "npm",
                        "pip",
                        "maven",
                        "nuget",
                        "composer",
                        "go",
                        "rust",
                        "erlang",
                        "actions",
                        "pub",
                        "other",
                        "swift"
                    ],
                    "type": "string",
                    "description": "The package\'s language or package management ecosystem."
                },
                "name": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The unique package name within its ecosystem."
                }
            },
            "description": "The name of the package affected by the vulnerability."
        },
        "vulnerable_version_range": {
            "type": [
                "string",
                "null"
            ],
            "description": "The range of the package versions affected by the vulnerability."
        },
        "first_patched_version": {
            "type": [
                "string",
                "null"
            ],
            "description": "The package version that resolve the vulnerability."
        },
        "vulnerable_functions": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "type": "string"
            },
            "description": "The functions in the package that are affected by the vulnerability.",
            "readOnly": true
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "package": {
        "ecosystem": "rubygems",
        "name": "generated"
    },
    "vulnerable_version_range": "generated",
    "first_patched_version": "generated",
    "vulnerable_functions": null
}';

    /**
     * package: The name of the package affected by the vulnerability.
     * vulnerableVersionRange: The range of the package versions affected by the vulnerability.
     * firstPatchedVersion: The package version that resolve the vulnerability.
     * vulnerableFunctions: The functions in the package that are affected by the vulnerability.
     */
    public function __construct(public Schema\GlobalAdvisory\Vulnerabilities\Package|null $package, #[MapFrom('vulnerable_version_range')]
    public string|null $vulnerableVersionRange, #[MapFrom('first_patched_version')]
    public string|null $firstPatchedVersion, #[MapFrom('vulnerable_functions')]
    public array|null $vulnerableFunctions,)
    {
    }
}
