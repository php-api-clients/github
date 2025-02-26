<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleParamsReviewer
{
    public const SCHEMA_JSON         = '{
    "title": "Reviewer",
    "required": [
        "id",
        "type"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "ID of the reviewer which must review changes to matching files."
        },
        "type": {
            "enum": [
                "Team"
            ],
            "type": "string",
            "description": "The type of the reviewer"
        }
    },
    "description": "A required reviewing team"
}';
    public const SCHEMA_TITLE        = 'Reviewer';
    public const SCHEMA_DESCRIPTION  = 'A required reviewing team';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "type": "Team"
}';

    /**
     * id: ID of the reviewer which must review changes to matching files.
     * type: The type of the reviewer
     */
    public function __construct(public int $id, public string $type)
    {
    }
}
