<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Orgs\CreateOrUpdateCustomProperties\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "properties"
    ],
    "type": "object",
    "properties": {
        "properties": {
            "maxItems": 100,
            "minItems": 1,
            "type": "array",
            "items": {
                "title": "Organization Custom Property",
                "required": [
                    "property_name",
                    "value_type"
                ],
                "type": "object",
                "properties": {
                    "property_name": {
                        "type": "string",
                        "description": "The name of the property"
                    },
                    "value_type": {
                        "enum": [
                            "string",
                            "single_select"
                        ],
                        "type": "string",
                        "description": "The type of the value for the property",
                        "examples": [
                            "single_select"
                        ]
                    },
                    "required": {
                        "type": "boolean",
                        "description": "Whether the property is required."
                    },
                    "default_value": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "Default value of the property"
                    },
                    "description": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "Short description of the property"
                    },
                    "allowed_values": {
                        "type": [
                            "array",
                            "null"
                        ],
                        "items": {
                            "type": "string"
                        },
                        "description": "Ordered list of allowed values of the property"
                    }
                },
                "description": "Custom property defined on an organization"
            },
            "description": "The array of custom properties to create or update."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "properties": [
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": "generated",
            "description": "generated",
            "allowed_values": null
        }
    ]
}';

    /**
     * properties: The array of custom properties to create or update.
     */
    public function __construct(public array $properties)
    {
    }
}
