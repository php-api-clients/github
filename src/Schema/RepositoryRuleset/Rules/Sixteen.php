<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules;

use ApiClients\Client\GitHub\Schema;

final readonly class Sixteen
{
    public const SCHEMA_JSON         = '{
    "title": "max_file_path_length",
    "required": [
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "max_file_path_length"
            ],
            "type": "string"
        },
        "parameters": {
            "required": [
                "max_file_path_length"
            ],
            "type": "object",
            "properties": {
                "max_file_path_length": {
                    "maximum": 256,
                    "minimum": 1,
                    "type": "integer",
                    "description": "The maximum amount of characters allowed in file paths"
                }
            }
        }
    },
    "description": "> [!NOTE]\\n> `max_file_path_length` is in beta and subject to change.\\n\\nPrevent commits that include file paths that exceed a specified character limit from being pushed to the commit graph."
}';
    public const SCHEMA_TITLE        = 'max_file_path_length';
    public const SCHEMA_DESCRIPTION  = '> [!NOTE]
> `max_file_path_length` is in beta and subject to change.

Prevent commits that include file paths that exceed a specified character limit from being pushed to the commit graph.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "max_file_path_length",
    "parameters": {
        "max_file_path_length": 20
    }
}';

    public function __construct(public string $type, public Schema\RepositoryRuleset\Rules\Sixteen\Parameters|null $parameters)
    {
    }
}
