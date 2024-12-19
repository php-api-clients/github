<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\PrivateRegistries\GetOrgPublicKey\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
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
                "012345678912345678"
            ]
        },
        "key": {
            "type": "string",
            "description": "The Base64 encoded public key.",
            "examples": [
                "2Sg8iYjAxxmI2LvUXpJjkYrMxURPc8r+dB7TJyvv1234"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "key_id": "012345678912345678",
    "key": "2Sg8iYjAxxmI2LvUXpJjkYrMxURPc8r+dB7TJyvv1234"
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
