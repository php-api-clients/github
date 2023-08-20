<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietAEA81627\TietD9F257C8\Tiet586483E5;

abstract readonly class Tiet737DE0E4
{
    public const SCHEMA_JSON         = '{
    "required": [
        "enabled"
    ],
    "type": "object",
    "properties": {
        "enabled": {
            "type": "boolean"
        }
    },
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled": false
}';

    public function __construct(public bool $enabled)
    {
    }
}
