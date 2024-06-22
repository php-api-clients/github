<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SigstoreBundle0\DsseEnvelope;

final readonly class Signatures
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "sig": {
            "type": "string"
        },
        "keyid": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "sig": "generated",
    "keyid": "generated"
}';

    public function __construct(public string|null $sig, public string|null $keyid)
    {
    }
}
