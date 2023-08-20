<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietACA2ABF1\Tiet1486B169\Tiet8AB0E7A7;

abstract readonly class Tiet4B4F1024
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "digest": {
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
    "digest": "generated",
    "name": "generated"
}';

    public function __construct(public string|null $digest, public string|null $name)
    {
    }
}
