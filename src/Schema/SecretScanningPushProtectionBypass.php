<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SecretScanningPushProtectionBypass
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "reason": {
            "enum": [
                "false_positive",
                "used_in_tests",
                "will_fix_later"
            ],
            "type": "string",
            "description": "The reason for bypassing push protection."
        },
        "expire_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time that the bypass will expire in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time"
        },
        "token_type": {
            "type": "string",
            "description": "The token type this bypass is for."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "reason": "will_fix_later",
    "expire_at": "1970-01-01T00:00:00+00:00",
    "token_type": "generated"
}';

    /**
     * reason: The reason for bypassing push protection.
     * expireAt: The time that the bypass will expire in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * tokenType: The token type this bypass is for.
     */
    public function __construct(public string|null $reason, #[MapFrom('expire_at')]
    public string|null $expireAt, #[MapFrom('token_type')]
    public string|null $tokenType,)
    {
    }
}
