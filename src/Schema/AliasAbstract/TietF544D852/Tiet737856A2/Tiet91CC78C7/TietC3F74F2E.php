<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietF544D852\Tiet737856A2\Tiet91CC78C7;

abstract readonly class TietC3F74F2E
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
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
    "from": "generated"
}';

    public function __construct(public string|null $from)
    {
    }
}
