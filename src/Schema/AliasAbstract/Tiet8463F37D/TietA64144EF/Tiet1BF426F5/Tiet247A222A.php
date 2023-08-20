<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet8463F37D\TietA64144EF\Tiet1BF426F5;

abstract readonly class Tiet247A222A
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "code": {
            "type": "string"
        },
        "message": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "code": "generated",
    "message": "generated"
}';

    public function __construct(public string|null $code, public string|null $message)
    {
    }
}
