<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet577CE6E9\TietD2ECD35F\Tiet80C6C3F8;

abstract readonly class Tiet8528CD9E
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "string",
            "description": "The previous version of the body."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';

    /**
     * from: The previous version of the body.
     */
    public function __construct(public string $from)
    {
    }
}
