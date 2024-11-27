<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietE746E247\Tiet29FCA330\Tiet8C6E229F;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietB9C53521
{
    public const SCHEMA_JSON         = '{
    "required": [
        "verified",
        "reason",
        "signature",
        "payload"
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
