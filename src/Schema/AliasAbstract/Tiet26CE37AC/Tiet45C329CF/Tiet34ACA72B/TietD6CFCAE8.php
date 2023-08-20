<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet26CE37AC\Tiet45C329CF\Tiet34ACA72B;

abstract readonly class TietD6CFCAE8
{
    public const SCHEMA_JSON         = '{
    "required": [
        "labels"
    ],
    "type": "object",
    "properties": {
        "labels": {
            "maxItems": 100,
            "minItems": 0,
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The names of the custom labels to set for the runner. You can pass an empty array to remove all custom labels."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "labels": [
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated"
    ]
}';

    /**
     * labels: The names of the custom labels to set for the runner. You can pass an empty array to remove all custom labels.
     */
    public function __construct(public array $labels)
    {
    }
}
