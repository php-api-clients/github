<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\GpgKey;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Subkeys
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "primary_key_id": {
            "type": "integer"
        },
        "key_id": {
            "type": "string"
        },
        "public_key": {
            "type": "string"
        },
        "emails": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "email": {
                        "type": "string"
                    },
                    "verified": {
                        "type": "boolean"
                    }
                }
            }
        },
        "subkeys": {
            "type": "array",
            "items": {}
        },
        "can_sign": {
            "type": "boolean"
        },
        "can_encrypt_comms": {
            "type": "boolean"
        },
        "can_encrypt_storage": {
            "type": "boolean"
        },
        "can_certify": {
            "type": "boolean"
        },
        "created_at": {
            "type": "string"
        },
        "expires_at": {
            "type": [
                "string",
                "null"
            ]
        },
        "raw_key": {
            "type": [
                "string",
                "null"
            ]
        },
        "revoked": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "primary_key_id": 14,
    "key_id": "generated",
    "public_key": "generated",
    "emails": [
        {
            "email": "generated",
            "verified": false
        },
        {
            "email": "generated",
            "verified": false
        }
    ],
    "subkeys": [
        "generated",
        "generated"
    ],
    "can_sign": false,
    "can_encrypt_comms": false,
    "can_encrypt_storage": false,
    "can_certify": false,
    "created_at": "generated",
    "expires_at": "generated",
    "raw_key": "generated",
    "revoked": false
}';

    public function __construct(public int|null $id, #[MapFrom('primary_key_id')]
    public int|null $primaryKeyId, #[MapFrom('key_id')]
    public string|null $keyId, #[MapFrom('public_key')]
    public string|null $publicKey, public array|null $emails, public array|null $subkeys, #[MapFrom('can_sign')]
    public bool|null $canSign, #[MapFrom('can_encrypt_comms')]
    public bool|null $canEncryptComms, #[MapFrom('can_encrypt_storage')]
    public bool|null $canEncryptStorage, #[MapFrom('can_certify')]
    public bool|null $canCertify, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('expires_at')]
    public string|null $expiresAt, #[MapFrom('raw_key')]
    public string|null $rawKey, public bool|null $revoked,)
    {
    }
}
