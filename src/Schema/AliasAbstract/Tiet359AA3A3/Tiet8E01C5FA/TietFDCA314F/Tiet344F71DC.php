<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet359AA3A3\Tiet8E01C5FA\TietFDCA314F;

abstract readonly class Tiet344F71DC
{
    public const SCHEMA_JSON         = '{
    "required": [
        "title"
    ],
    "type": "object",
    "properties": {
        "title": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "title": "generated"
}';

    public function __construct(public string $title)
    {
    }
}
