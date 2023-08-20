<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietDD5FD85B\Tiet2CB66CD7\Tiet1059E1F8;

abstract readonly class Tiet79C1FE79
{
    public const SCHEMA_JSON         = '{
    "required": [
        "ecosystem",
        "name"
    ],
    "type": "object",
    "properties": {
        "ecosystem": {
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
    "ecosystem": "generated",
    "name": "generated"
}';

    public function __construct(public string $ecosystem, public string $name)
    {
    }
}
