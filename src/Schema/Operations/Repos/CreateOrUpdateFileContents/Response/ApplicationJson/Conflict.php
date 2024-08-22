<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Repos\CreateOrUpdateFileContents\Response\ApplicationJson;

final readonly class Conflict
{
    public const SCHEMA_JSON         = '{
    "oneOf": [
        {
            "title": "Basic Error",
            "type": "object",
            "properties": {
                "message": {
                    "type": "string"
                },
                "documentation_url": {
                    "type": "string"
                },
                "url": {
                    "type": "string"
                },
                "status": {
                    "type": "string"
                }
            },
            "description": "Basic Error"
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
