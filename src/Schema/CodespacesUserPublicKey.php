<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodespacesUserPublicKey
{
    public const SCHEMA_JSON         = '{
    "title": "CodespacesUserPublicKey",
    "required": [
        "key_id",
        "key"
    ],
    "type": "object",
    "properties": {
        "key_id": {
            "type": "string",
            "description": "The identifier for the key.",
            "examples": [
                "1234567"
            ]
        },
        "key": {
            "type": "string",
            "description": "The Base64 encoded public key.",
            "examples": [
                "hBT5WZEj8ZoOv6TYJsfWq7MxTEQopZO5\\/IT3ZCVQPzs="
            ]
        }
    },
    "description": "The public key used for setting user Codespaces\' Secrets."
}';
    public const SCHEMA_TITLE        = 'CodespacesUserPublicKey';
    public const SCHEMA_DESCRIPTION  = 'The public key used for setting user Codespaces\' Secrets.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "key_id": "1234567",
    "key": "hBT5WZEj8ZoOv6TYJsfWq7MxTEQopZO5\\/IT3ZCVQPzs="
}';

    /**
     * keyId: The identifier for the key.
     * key: The Base64 encoded public key.
     */
    public function __construct(#[MapFrom('key_id')]
    public string $keyId, public string $key,)
    {
    }
}
