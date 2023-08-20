<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet72F32616\Tiet6A9787BA\Tiet9DDC9E7E;

abstract readonly class Tiet8E246D35
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
            "type": "integer"
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
