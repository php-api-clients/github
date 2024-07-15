<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CodeSecurity\DetachConfiguration\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "selected_repository_ids": {
            "type": "array",
            "items": {
                "type": "integer",
                "description": "Unique identifier of the repository."
            },
            "description": "An array of repository IDs to detach from configurations."
        }
    },
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "selected_repository_ids": [
        24,
        25
    ]
}';

    /**
     * selectedRepositoryIds: An array of repository IDs to detach from configurations.
     */
    public function __construct(#[MapFrom('selected_repository_ids')]
    public array|null $selectedRepositoryIds,)
    {
    }
}
