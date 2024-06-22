<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial\TlogEntries;

final readonly class InclusionPromise
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "signedEntryTimestamp": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "signedEntryTimestamp": "generated"
}';

    public function __construct(public string|null $signedEntryTimestamp)
    {
    }
}
