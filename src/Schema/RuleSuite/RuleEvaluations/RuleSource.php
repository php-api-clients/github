<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RuleSuite\RuleEvaluations;

final readonly class RuleSource
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "type": {
            "type": "string",
            "description": "The type of rule source."
        },
        "id": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The ID of the rule source."
        },
        "name": {
            "type": [
                "string",
                "null"
            ],
            "description": "The name of the rule source."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "generated",
    "id": 2,
    "name": "generated"
}';

    /**
     * type: The type of rule source.
     * id: The ID of the rule source.
     * name: The name of the rule source.
     */
    public function __construct(public string|null $type, public int|null $id, public string|null $name)
    {
    }
}
