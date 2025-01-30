<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietADA0376A\TietE291E6D1\Tiet2A83A4E8;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietFA266CAF
{
    public const SCHEMA_JSON         = '{
    "required": [
        "verified",
        "reason",
        "signature",
        "payload",
        "verified_at"
    ],
    "type": "object",
    "properties": {
        "verified": {
            "type": "boolean"
        },
        "reason": {
            "type": "string"
        },
        "signature": {
            "type": [
                "string",
                "null"
            ]
        },
        "payload": {
            "type": [
                "string",
                "null"
            ]
        },
        "verified_at": {
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "verified": false,
    "reason": "generated",
    "signature": "generated",
    "payload": "generated",
    "verified_at": "generated"
}';

    public function __construct(public bool $verified, public string $reason, public string|null $signature, public string|null $payload, #[MapFrom('verified_at')]
    public string|null $verifiedAt,)
    {
    }
}
