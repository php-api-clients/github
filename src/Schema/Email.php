<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class Email
{
    public const SCHEMA_JSON         = '{
    "title": "Email",
    "required": [
        "email",
        "primary",
        "verified",
        "visibility"
    ],
    "type": "object",
    "properties": {
        "email": {
            "type": "string",
            "format": "email",
            "examples": [
                "octocat@github.com"
            ]
        },
        "primary": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "verified": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "visibility": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "public"
            ]
        }
    },
    "description": "Email"
}';
    public const SCHEMA_TITLE        = 'Email';
    public const SCHEMA_DESCRIPTION  = 'Email';
    public const SCHEMA_EXAMPLE_DATA = '{
    "email": "octocat@github.com",
    "primary": true,
    "verified": true,
    "visibility": "public"
}';

    public function __construct(public string $email, public bool $primary, public bool $verified, public string|null $visibility)
    {
    }
}
