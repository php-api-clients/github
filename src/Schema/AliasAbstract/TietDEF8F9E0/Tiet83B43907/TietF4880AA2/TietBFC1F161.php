<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietDEF8F9E0\Tiet83B43907\TietF4880AA2;

abstract readonly class TietBFC1F161
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "string",
            "description": "The previous version of the name if the action was `edited`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';

    /**
     * from: The previous version of the name if the action was `edited`.
     */
    public function __construct(public string $from)
    {
    }
}
