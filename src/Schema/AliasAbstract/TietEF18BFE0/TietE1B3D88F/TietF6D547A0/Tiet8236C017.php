<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietEF18BFE0\TietE1B3D88F\TietF6D547A0;

abstract readonly class Tiet8236C017
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "url",
        "name"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "format": "int64"
        },
        "url": {
            "type": "string"
        },
        "name": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "url": "generated",
    "name": "generated"
}';

    public function __construct(public int $id, public string $url, public string $name)
    {
    }
}
