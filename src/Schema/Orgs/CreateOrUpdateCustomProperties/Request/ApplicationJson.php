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
                            "null",
                            "string",
                            "array"
                        ],
                        "oneOf": [
                            {
                                "type": "string"
                            },
                            {
                                "type": "array",
                                "items": {
                                    "type": "string"
                                }
                            }
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
                        "maxItems": 200,
                        "type": [
                            "array",
                            "null"
                        ],
                        "items": {
                            "maxLength": 75,
                            "type": "string"
                        },
                        "description": "An ordered list of the allowed values of the property.\\nThe property can have up to 200 allowed values."
                    },
                    "values_editable_by": {
                        "enum": [
                            "org_actors",
                            "org_and_repo_actors",
                            null
                        ],
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "Who can edit the values of the property",
                        "examples": [
                            "org_actors"
                        ]
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
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
        },
        {
            "property_name": "generated",
            "value_type": "single_select",
            "required": false,
            "default_value": null,
            "description": "generated",
            "allowed_values": null,
            "values_editable_by": "org_actors"
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
