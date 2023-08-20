<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SearchResultTextMatches;

final readonly class Matches
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "text": {
            "type": "string"
        },
        "indices": {
            "type": "array",
            "items": {
                "type": "integer"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "text": "generated",
    "indices": [
        8,
        9
    ]
}';

    public function __construct(public string|null $text, public array|null $indices)
    {
    }
}
