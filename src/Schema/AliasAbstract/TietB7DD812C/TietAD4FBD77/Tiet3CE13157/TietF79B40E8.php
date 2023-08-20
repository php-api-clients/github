<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietB7DD812C\TietAD4FBD77\Tiet3CE13157;

abstract readonly class TietF79B40E8
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the project."
        },
        "body": {
            "type": "string",
            "description": "The description of the project."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "body": "generated"
}';

    /**
     * name: The name of the project.
     * body: The description of the project.
     */
    public function __construct(public string $name, public string|null $body)
    {
    }
}
