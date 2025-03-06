<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet1DA73592\TietBB556EE9\Tiet519FED8E;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietFC41A28A
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
        },
        "relationship": {
            "enum": [
                "unknown",
                "direct",
                "transitive",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The vulnerable dependency\'s relationship to your project.\\n\\n> [!NOTE]\\n> We are rolling out support for dependency relationship across ecosystems. This value will be \\"unknown\\" for all dependencies in unsupported ecosystems.\\n",
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
    "scope": "development",
    "relationship": "transitive"
}';

    /**
     * package: Details for the vulnerable package.
     * manifestPath: The full path to the dependency manifest file, relative to the root of the repository.
     * scope: The execution scope of the vulnerable dependency.
     * relationship: The vulnerable dependency's relationship to your project.

    > [!NOTE]
    > We are rolling out support for dependency relationship across ecosystems. This value will be "unknown" for all dependencies in unsupported ecosystems.
     */
    public function __construct(public Schema\DependabotAlertPackage|null $package, #[MapFrom('manifest_path')]
    public string|null $manifestPath, public string|null $scope, public string|null $relationship,)
    {
    }
}
