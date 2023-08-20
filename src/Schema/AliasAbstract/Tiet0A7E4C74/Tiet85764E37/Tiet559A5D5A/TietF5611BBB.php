<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet0A7E4C74\Tiet85764E37\Tiet559A5D5A;

abstract readonly class TietF5611BBB
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "from": {
            "type": "array",
            "items": {
                "type": "string"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": [
        "generated",
        "generated"
    ]
}';

    public function __construct(public array|null $from)
    {
    }
}
