<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Orgs\CreateOrUpdateCustomPropertiesValuesForRepos\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "repository_names",
        "properties"
    ],
    "type": "object",
    "properties": {
        "repository_names": {
            "maxItems": 30,
            "minItems": 1,
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The names of repositories that the custom property values will be applied to."
        },
        "properties": {
            "type": "array",
            "items": {
                "title": "Custom Property Value",
                "required": [
                    "property_name",
                    "value"
                ],
                "type": "object",
                "properties": {
                    "property_name": {
                        "type": "string",
                        "description": "The name of the property"
                    },
                    "value": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The value assigned to the property"
                    }
                },
                "description": "Custom property name and associated value"
            },
            "description": "List of custom property names and associated values to apply to the repositories."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "repository_names": [
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated"
    ],
    "properties": [
        {
            "property_name": "generated",
            "value": "generated"
        },
        {
            "property_name": "generated",
            "value": "generated"
        }
    ]
}';

    /**
     * repositoryNames: The names of repositories that the custom property values will be applied to.
     * properties: List of custom property names and associated values to apply to the repositories.
     */
    public function __construct(#[MapFrom('repository_names')]
    public array $repositoryNames, public array $properties,)
    {
    }
}
