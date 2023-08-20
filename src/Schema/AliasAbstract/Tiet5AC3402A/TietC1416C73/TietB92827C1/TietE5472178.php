<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet5AC3402A\TietC1416C73\TietB92827C1;

abstract readonly class TietE5472178
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "string",
            "description": "The previous version of the title if the action was `edited`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';

    /**
     * from: The previous version of the title if the action was `edited`.
     */
    public function __construct(public string $from)
    {
    }
}
