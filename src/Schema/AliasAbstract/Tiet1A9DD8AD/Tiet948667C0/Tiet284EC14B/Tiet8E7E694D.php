<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet1A9DD8AD\Tiet948667C0\Tiet284EC14B;

abstract readonly class Tiet8E7E694D
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "from": {
            "type": [
                "string",
                "null"
            ],
            "format": "date"
        },
        "to": {
            "type": [
                "string",
                "null"
            ],
            "format": "date"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated",
    "to": "generated"
}';

    public function __construct(public string|null $from, public string|null $to)
    {
    }
}
