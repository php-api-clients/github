<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial;

use ApiClients\Client\GitHub\Schema;

final readonly class TlogEntries
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "logIndex": {
            "type": "string"
        },
        "logId": {
            "type": "object",
            "properties": {
                "keyId": {
                    "type": "string"
                }
            }
        },
        "kindVersion": {
            "type": "object",
            "properties": {
                "kind": {
                    "type": "string"
                },
                "version": {
                    "type": "string"
                }
            }
        },
        "integratedTime": {
            "type": "string"
        },
        "inclusionPromise": {
            "type": "object",
            "properties": {
                "signedEntryTimestamp": {
                    "type": "string"
                }
            }
        },
        "inclusionProof": {
            "type": [
                "string",
                "null"
            ]
        },
        "canonicalizedBody": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "logIndex": "generated",
    "logId": {
        "keyId": "generated"
    },
    "kindVersion": {
        "kind": "generated",
        "version": "generated"
    },
    "integratedTime": "generated",
    "inclusionPromise": {
        "signedEntryTimestamp": "generated"
    },
    "inclusionProof": "generated",
    "canonicalizedBody": "generated"
}';

    public function __construct(public string|null $logIndex, public Schema\SigstoreBundle0\VerificationMaterial\TlogEntries\LogId|null $logId, public Schema\SigstoreBundle0\VerificationMaterial\TlogEntries\KindVersion|null $kindVersion, public string|null $integratedTime, public Schema\SigstoreBundle0\VerificationMaterial\TlogEntries\InclusionPromise|null $inclusionPromise, public string|null $inclusionProof, public string|null $canonicalizedBody)
    {
    }
}
