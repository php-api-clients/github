<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Users\AddEmailForAuthenticatedUser\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "oneOf": [
        {
            "required": [
                "emails"
            ],
            "type": "object",
            "properties": {
                "emails": {
                    "minItems": 1,
                    "type": "array",
                    "items": {
                        "type": "string",
                        "examples": [
                            "username@example.com"
                        ]
                    },
                    "description": "Adds one or more email addresses to your GitHub account. Must contain at least one email address. **Note:** Alternatively, you can pass a single email address or an `array` of emails addresses directly, but we recommend that you pass an object using the `emails` key.",
                    "examples": []
                }
            },
            "example": {
                "emails": [
                    "octocat@github.com",
                    "mona@github.com"
                ]
            }
        },
        {
            "minItems": 1,
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "username@example.com"
                ]
            }
        },
        {
            "type": "string"
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
