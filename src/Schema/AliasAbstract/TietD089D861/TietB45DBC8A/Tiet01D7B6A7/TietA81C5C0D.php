<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietD089D861\TietB45DBC8A\Tiet01D7B6A7;

abstract readonly class TietA81C5C0D
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "string",
            "description": "The previous version of the body if the action was `edited`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';

    /**
     * from: The previous version of the body if the action was `edited`.
     */
    public function __construct(public string $from)
    {
    }
}
