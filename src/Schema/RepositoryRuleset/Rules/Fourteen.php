<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules;

use ApiClients\Client\GitHub\Schema;

final readonly class Fourteen
{
    public const SCHEMA_JSON         = '{
    "title": "file_path_restriction",
    "required": [
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "file_path_restriction"
            ],
            "type": "string"
        },
        "parameters": {
            "required": [
                "restricted_file_paths"
            ],
            "type": "object",
            "properties": {
                "restricted_file_paths": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The file paths that are restricted from being pushed to the commit graph."
                }
            }
        }
    },
    "description": "Note: file_path_restriction is in beta and subject to change.\\n\\nPrevent commits that include changes in specified file paths from being pushed to the commit graph."
}';
    public const SCHEMA_TITLE        = 'file_path_restriction';
    public const SCHEMA_DESCRIPTION  = 'Note: file_path_restriction is in beta and subject to change.

Prevent commits that include changes in specified file paths from being pushed to the commit graph.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "file_path_restriction",
    "parameters": {
        "restricted_file_paths": [
            "generated",
            "generated"
        ]
    }
}';

    public function __construct(public string $type, public Schema\RepositoryRuleset\Rules\Fourteen\Parameters|null $parameters)
    {
    }
}
