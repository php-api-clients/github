<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRulesetConditionsRepositoryPropertyTarget
{
    public const SCHEMA_JSON         = '{
    "title": "Repository ruleset conditions for repository properties",
    "required": [
        "repository_property"
    ],
    "type": "object",
    "properties": {
        "repository_property": {
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
                            }
                        },
                        "description": "Parameters for a targeting a repository property"
                    },
                    "description": "The repository properties and values to exclude. The condition will not pass if any of these properties match."
                }
            }
        }
    },
    "description": "Parameters for a repository property condition"
}';
    public const SCHEMA_TITLE        = 'Repository ruleset conditions for repository properties';
    public const SCHEMA_DESCRIPTION  = 'Parameters for a repository property condition';
    public const SCHEMA_EXAMPLE_DATA = '{
    "repository_property": {
        "include": [
            {
                "name": "generated",
                "property_values": [
                    "generated",
                    "generated"
                ]
            },
            {
                "name": "generated",
                "property_values": [
                    "generated",
                    "generated"
                ]
            }
        ],
        "exclude": [
            {
                "name": "generated",
                "property_values": [
                    "generated",
                    "generated"
                ]
            },
            {
                "name": "generated",
                "property_values": [
                    "generated",
                    "generated"
                ]
            }
        ]
    }
}';

    public function __construct(#[MapFrom('repository_property')]
    public Schema\RepositoryRulesetConditionsRepositoryPropertyTarget\RepositoryProperty $repositoryProperty,)
    {
    }
}
