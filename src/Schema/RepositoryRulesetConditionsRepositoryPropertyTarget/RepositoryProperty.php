<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRulesetConditionsRepositoryPropertyTarget;

final readonly class RepositoryProperty
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "include": {
            "type": "array",
            "items": {
                "title": "Repository ruleset property targeting definition",
                "required": [
                    "name",
                    "property_values"
                ],
                "type": "object",
                "properties": {
                    "name": {
                        "type": "string",
                        "description": "The name of the repository property to target"
                    },
                    "property_values": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        },
                        "description": "The values to match for the repository property"
                    },
                    "source": {
                        "enum": [
                            "custom",
                            "system"
                        ],
                        "type": "string",
                        "description": "The source of the repository property. Defaults to \'custom\' if not specified."
                    }
                },
                "description": "Parameters for a targeting a repository property"
            },
            "description": "The repository properties and values to include. All of these properties must match for the condition to pass."
        },
        "exclude": {
            "type": "array",
            "items": {
                "title": "Repository ruleset property targeting definition",
                "required": [
                    "name",
                    "property_values"
                ],
                "type": "object",
                "properties": {
                    "name": {
                        "type": "string",
                        "description": "The name of the repository property to target"
                    },
                    "property_values": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        },
                        "description": "The values to match for the repository property"
                    },
                    "source": {
                        "enum": [
                            "custom",
                            "system"
                        ],
                        "type": "string",
                        "description": "The source of the repository property. Defaults to \'custom\' if not specified."
                    }
                },
                "description": "Parameters for a targeting a repository property"
            },
            "description": "The repository properties and values to exclude. The condition will not pass if any of these properties match."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "include": [
        {
            "name": "generated",
            "property_values": [
                "generated",
                "generated"
            ],
            "source": "system"
        },
        {
            "name": "generated",
            "property_values": [
                "generated",
                "generated"
            ],
            "source": "system"
        }
    ],
    "exclude": [
        {
            "name": "generated",
            "property_values": [
                "generated",
                "generated"
            ],
            "source": "system"
        },
        {
            "name": "generated",
            "property_values": [
                "generated",
                "generated"
            ],
            "source": "system"
        }
    ]
}';

    /**
     * include: The repository properties and values to include. All of these properties must match for the condition to pass.
     * exclude: The repository properties and values to exclude. The condition will not pass if any of these properties match.
     */
    public function __construct(public array|null $include, public array|null $exclude)
    {
    }
}
