<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleDeletion
{
    public const SCHEMA_JSON         = '{
    "title": "deletion",
    "required": [
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "deletion"
            ],
            "type": "string"
        }
    },
    "description": "Only allow users with bypass permissions to delete matching refs."
}';
    public const SCHEMA_TITLE        = 'deletion';
    public const SCHEMA_DESCRIPTION  = 'Only allow users with bypass permissions to delete matching refs.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "deletion"
}';

    public function __construct(public string $type)
    {
    }
}
