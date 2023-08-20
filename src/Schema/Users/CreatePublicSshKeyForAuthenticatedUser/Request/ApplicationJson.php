<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Users\CreatePublicSshKeyForAuthenticatedUser\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "key"
    ],
    "type": "object",
    "properties": {
        "title": {
            "type": "string",
            "description": "A descriptive name for the new key.",
            "examples": [
                "Personal MacBook Air"
            ]
        },
        "key": {
            "pattern": "^ssh-(rsa|dss|ed25519) |^ecdsa-sha2-nistp(256|384|521) ",
            "type": "string",
            "description": "The public SSH key to add to your GitHub account."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "title": "Personal MacBook Air",
    "key": "ecdsa-sha2-nistp521 "
}';

    /**
     * title: A descriptive name for the new key.
     * key: The public SSH key to add to your GitHub account.
     */
    public function __construct(public string|null $title, public string $key)
    {
    }
}
