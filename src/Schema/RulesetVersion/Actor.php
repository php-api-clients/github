<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RulesetVersion;

final readonly class Actor
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "type": {
            "type": "string"
        }
    },
    "description": "The actor who updated the ruleset"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The actor who updated the ruleset';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "type": "generated"
}';

    public function __construct(public int|null $id, public string|null $type)
    {
    }
}
