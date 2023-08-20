<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietBCF0AA24\Tiet9CE55B8F\Tiet7911DF47;

abstract readonly class Tiet9F4CD41A
{
    public const SCHEMA_JSON         = '{
    "required": [
        "value",
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "type": "string"
        },
        "value": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "generated",
    "value": "generated"
}';

    public function __construct(public string $type, public string $value)
    {
    }
}
