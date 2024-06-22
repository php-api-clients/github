<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial;

final readonly class XFiveHundredNineCertificatechain
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "certificates": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "rawBytes": {
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
    "certificates": [
        {
            "rawBytes": "generated"
        },
        {
            "rawBytes": "generated"
        }
    ]
}';

    public function __construct(public array|null $certificates)
    {
    }
}
