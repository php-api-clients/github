<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial\XFiveHundredNineCertificatechain;

final readonly class Certificates
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "rawBytes": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "rawBytes": "generated"
}';

    public function __construct(public string|null $rawBytes)
    {
    }
}
