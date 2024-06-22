<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial\TlogEntries;

final readonly class KindVersion
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "kind": {
            "type": "string"
        },
        "version": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "kind": "generated",
    "version": "generated"
}';

    public function __construct(public string|null $kind, public string|null $version)
    {
    }
}
