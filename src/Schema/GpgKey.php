<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class GpgKey
{
    public const SCHEMA_JSON         = '{
    "title": "GPG Key",
    "required": [
        "id",
        "primary_key_id",
        "key_id",
        "raw_key",
        "public_key",
        "created_at",
        "expires_at",
        "can_sign",
        "can_encrypt_comms",
        "can_encrypt_storage",
        "can_certify",
        "emails",
        "subkeys",
        "revoked"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "format": "int64",
            "examples": [
                3
            ]
        },
        "name": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "Octocat\'s GPG Key"
            ]
        },
        "primary_key_id": {
            "type": [
                "integer",
                "null"
            ]
        },
        "key_id": {
            "type": "string",
            "examples": [
                "3262EFF25BA0D270"
            ]
        },
        "public_key": {
            "type": "string",
            "examples": [
                "xsBNBFayYZ..."
            ]
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
            },
            "examples": [
                {
                    "email": "octocat@users.noreply.github.com",
                    "verified": true
                }
            ]
        },
        "subkeys": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer",
                        "format": "int64"
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
            },
            "examples": [
                {
                    "id": 4,
                    "primary_key_id": 3,
                    "key_id": "4A595D4C72EE49C7",
                    "public_key": "zsBNBFayYZ...",
                    "emails": [],
                    "can_sign": false,
                    "can_encrypt_comms": true,
                    "can_encrypt_storage": true,
                    "can_certify": false,
                    "created_at": "2016-03-24T11:31:04-06:00",
                    "expires_at": null,
                    "revoked": false
                }
            ]
        },
        "can_sign": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "can_encrypt_comms": {
            "type": "boolean"
        },
        "can_encrypt_storage": {
            "type": "boolean"
        },
        "can_certify": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2016-03-24T11:31:04-06:00"
            ]
        },
        "expires_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time"
        },
        "revoked": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "raw_key": {
            "type": [
                "string",
                "null"
            ]
        }
    },
    "description": "A unique encryption key"
}';
    public const SCHEMA_TITLE        = 'GPG Key';
    public const SCHEMA_DESCRIPTION  = 'A unique encryption key';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 3,
    "name": "Octocat\'s GPG Key",
    "primary_key_id": 14,
    "key_id": "3262EFF25BA0D270",
    "public_key": "xsBNBFayYZ...",
    "emails": [
        {
            "email": "octocat@users.noreply.github.com",
            "verified": true
        },
        {
            "email": "octocat@users.noreply.github.com",
            "verified": true
        }
    ],
    "subkeys": [
        {
            "id": 4,
            "primary_key_id": 3,
            "key_id": "4A595D4C72EE49C7",
            "public_key": "zsBNBFayYZ...",
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
            "can_encrypt_comms": true,
            "can_encrypt_storage": true,
            "can_certify": false,
            "created_at": "2016-03-24T11:31:04-06:00",
            "expires_at": null,
            "raw_key": "generated",
            "revoked": false
        },
        {
            "id": 4,
            "primary_key_id": 3,
            "key_id": "4A595D4C72EE49C7",
            "public_key": "zsBNBFayYZ...",
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
            "can_encrypt_comms": true,
            "can_encrypt_storage": true,
            "can_certify": false,
            "created_at": "2016-03-24T11:31:04-06:00",
            "expires_at": null,
            "raw_key": "generated",
            "revoked": false
        }
    ],
    "can_sign": true,
    "can_encrypt_comms": false,
    "can_encrypt_storage": false,
    "can_certify": true,
    "created_at": "2016-03-24T11:31:04-06:00",
    "expires_at": "1970-01-01T00:00:00+00:00",
    "revoked": true,
    "raw_key": "generated"
}';

    public function __construct(public int $id, public string|null $name, #[MapFrom('primary_key_id')]
    public int|null $primaryKeyId, #[MapFrom('key_id')]
    public string $keyId, #[MapFrom('public_key')]
    public string $publicKey, public array $emails, public array $subkeys, #[MapFrom('can_sign')]
    public bool $canSign, #[MapFrom('can_encrypt_comms')]
    public bool $canEncryptComms, #[MapFrom('can_encrypt_storage')]
    public bool $canEncryptStorage, #[MapFrom('can_certify')]
    public bool $canCertify, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('expires_at')]
    public string|null $expiresAt, public bool $revoked, #[MapFrom('raw_key')]
    public string|null $rawKey,)
    {
    }
}
