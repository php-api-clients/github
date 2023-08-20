<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet2BF61F22\TietD40E495C\TietD2DCD6B6;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet9D8D9B32
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "package": {
            "required": [
                "ecosystem",
                "name"
            ],
            "type": "object",
            "properties": {
                "ecosystem": {
                    "type": "string",
                    "description": "The package\'s language or package management ecosystem.",
                    "readOnly": true
                },
                "name": {
                    "type": "string",
                    "description": "The unique package name within its ecosystem.",
                    "readOnly": true
                }
            },
            "description": "Details for the vulnerable package.",
            "readOnly": true,
            "additionalProperties": false
        },
        "manifest_path": {
            "type": "string",
            "description": "The full path to the dependency manifest file, relative to the root of the repository.",
            "readOnly": true
        },
        "scope": {
            "enum": [
                "development",
                "runtime",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The execution scope of the vulnerable dependency.",
            "readOnly": true
        }
    },
    "description": "Details for the vulnerable dependency.",
    "readOnly": true
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Details for the vulnerable dependency.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "package": {
        "ecosystem": "generated",
        "name": "generated"
    },
    "manifest_path": "generated",
    "scope": "development"
}';

    /**
     * package: Details for the vulnerable package.
     * manifestPath: The full path to the dependency manifest file, relative to the root of the repository.
     * scope: The execution scope of the vulnerable dependency.
     */
    public function __construct(public Schema\DependabotAlertPackage|null $package, #[MapFrom('manifest_path')]
    public string|null $manifestPath, public string|null $scope,)
    {
    }
}
