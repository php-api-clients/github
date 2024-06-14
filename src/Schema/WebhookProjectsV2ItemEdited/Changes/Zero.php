<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Zero
{
    public const SCHEMA_JSON         = '{
    "required": [
        "field_value"
    ],
    "type": "object",
    "properties": {
        "field_value": {
            "type": "object",
            "properties": {
                "field_node_id": {
                    "type": "string"
                },
                "field_type": {
                    "type": "string"
                },
                "field_name": {
                    "type": "string"
                },
                "project_number": {
                    "type": "integer"
                },
                "from": {
                    "type": [
                        "null",
                        "string",
                        "integer",
                        "object"
                    ],
                    "oneOf": [
                        {
                            "type": "string"
                        },
                        {
                            "type": "integer"
                        },
                        {
                            "title": "Projects v2 Single Select Option",
                            "required": [
                                "id",
                                "name"
                            ],
                            "type": "object",
                            "properties": {
                                "id": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                },
                                "color": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "description": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                }
                            },
                            "description": "An option for a single select field"
                        },
                        {
                            "title": "Projects v2 Iteration Setting",
                            "required": [
                                "id",
                                "title"
                            ],
                            "type": "object",
                            "properties": {
                                "id": {
                                    "type": "string"
                                },
                                "title": {
                                    "type": "string"
                                },
                                "duration": {
                                    "type": [
                                        "number",
                                        "null"
                                    ]
                                },
                                "start_date": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                }
                            },
                            "description": "An iteration setting for an iteration field"
                        }
                    ]
                },
                "to": {
                    "type": [
                        "null",
                        "string",
                        "integer",
                        "object"
                    ],
                    "oneOf": [
                        {
                            "type": "string"
                        },
                        {
                            "type": "integer"
                        },
                        {
                            "title": "Projects v2 Single Select Option",
                            "required": [
                                "id",
                                "name"
                            ],
                            "type": "object",
                            "properties": {
                                "id": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                },
                                "color": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "description": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                }
                            },
                            "description": "An option for a single select field"
                        },
                        {
                            "title": "Projects v2 Iteration Setting",
                            "required": [
                                "id",
                                "title"
                            ],
                            "type": "object",
                            "properties": {
                                "id": {
                                    "type": "string"
                                },
                                "title": {
                                    "type": "string"
                                },
                                "duration": {
                                    "type": [
                                        "number",
                                        "null"
                                    ]
                                },
                                "start_date": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                }
                            },
                            "description": "An iteration setting for an iteration field"
                        }
                    ]
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "field_value": {
        "field_node_id": "generated",
        "field_type": "generated",
        "field_name": "generated",
        "project_number": 14,
        "from": null,
        "to": null
    }
}';

    public function __construct(#[MapFrom('field_value')]
    public Schema\WebhookProjectsV2ItemEdited\Changes\Zero\FieldValue $fieldValue,)
    {
    }
}
