<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRulesetConditionsRepositoryPropertySpec
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = 'Repository ruleset property targeting definition';
    public const SCHEMA_DESCRIPTION  = 'Parameters for a targeting a repository property';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "property_values": [
        "generated",
        "generated"
    ]
}';

    /**
     * name: The name of the repository property to target
     * propertyValues: The values to match for the repository property
     */
    public function __construct(public string $name, #[MapFrom('property_values')]
    public array $propertyValues,)
    {
    }
}
