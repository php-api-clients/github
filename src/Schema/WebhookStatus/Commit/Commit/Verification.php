<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Verification
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
        "payload": {
            "type": [
                "string",
                "null"
            ]
        },
        "reason": {
            "enum": [
                "expired_key",
                "not_signing_key",
                "gpgverify_error",
                "gpgverify_unavailable",
                "unsigned",
                "unknown_signature_type",
                "no_user",
                "unverified_email",
                "bad_email",
                "unknown_key",
                "malformed_signature",
                "invalid",
                "valid",
                "bad_cert",
                "ocsp_pending"
            ],
            "type": "string"
        },
        "signature": {
            "type": [
                "string",
                "null"
            ]
        },
        "verified": {
            "type": "boolean"
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
    "payload": "generated",
    "reason": "ocsp_pending",
    "signature": "generated",
    "verified": false,
    "verified_at": "generated"
}';

    public function __construct(public string|null $payload, public string $reason, public string|null $signature, public bool $verified, #[MapFrom('verified_at')]
    public string|null $verifiedAt,)
    {
    }
}
