<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Git\CreateBlob\Response\ApplicationJson;

final readonly class UnprocessableEntity
{
    public const SCHEMA_JSON         = '{
    "oneOf": [
        {
            "title": "Validation Error",
            "required": [
                "message",
                "documentation_url"
            ],
            "type": "object",
            "properties": {
                "message": {
                    "type": "string"
                },
                "documentation_url": {
                    "type": "string"
                },
                "errors": {
                    "type": "array",
                    "items": {
                        "required": [
                            "code"
                        ],
                        "type": "object",
                        "properties": {
                            "resource": {
                                "type": "string"
                            },
                            "field": {
                                "type": "string"
                            },
                            "message": {
                                "type": "string"
                            },
                            "code": {
                                "type": "string"
                            },
                            "index": {
                                "type": "integer"
                            },
                            "value": {
                                "oneOf": [
                                    {
                                        "type": [
                                            "string",
                                            "null"
                                        ]
                                    },
                                    {
                                        "type": [
                                            "integer",
                                            "null"
                                        ]
                                    },
                                    {
                                        "type": [
                                            "array",
                                            "null"
                                        ],
                                        "items": {
                                            "type": "string"
                                        }
                                    }
                                ]
                            }
                        }
                    }
                }
            },
            "description": "Validation Error"
        },
        {
            "type": "object",
            "properties": {
                "message": {
                    "type": "string"
                },
                "documentation_url": {
                    "type": "string"
                },
                "status": {
                    "type": "string"
                },
                "metadata": {
                    "type": "object",
                    "properties": {
                        "secret_scanning": {
                            "type": "object",
                            "properties": {
                                "bypass_placeholders": {
                                    "type": "array",
                                    "items": {
                                        "type": "object",
                                        "properties": {
                                            "placeholder_id": {
                                                "type": "string",
                                                "description": "The ID of the push protection bypass placeholder. This value is returned on any push protected routes."
                                            },
                                            "token_type": {
                                                "type": "string"
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            },
            "description": "Repository rule violation was detected"
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
