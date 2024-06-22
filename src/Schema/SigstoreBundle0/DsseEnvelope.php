<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SigstoreBundle0;

final readonly class DsseEnvelope
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "payload": {
            "type": "string"
        },
        "payloadType": {
            "type": "string"
        },
        "signatures": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "sig": {
                        "type": "string"
                    },
                    "keyid": {
                        "type": "string"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "payload": "generated",
    "payloadType": "generated",
    "signatures": [
        {
            "sig": "generated",
            "keyid": "generated"
        },
        {
            "sig": "generated",
            "keyid": "generated"
        }
    ]
}';

    public function __construct(public string|null $payload, public string|null $payloadType, public array|null $signatures)
    {
    }
}
