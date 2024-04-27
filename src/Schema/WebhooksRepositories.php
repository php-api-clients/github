<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class WebhooksRepositories
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "node_id",
        "name",
        "full_name",
        "private"
    ],
    "type": "object",
    "properties": {
        "full_name": {
            "type": "string"
        },
        "id": {
            "type": "integer",
            "description": "Unique identifier of the repository"
        },
        "name": {
            "type": "string",
            "description": "The name of the repository."
        },
        "node_id": {
            "type": "string"
        },
        "private": {
            "type": "boolean",
            "description": "Whether the repository is private or public."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "full_name": "generated",
    "id": 2,
    "name": "generated",
    "node_id": "generated",
    "private": false
}';

    /**
     * id: Unique identifier of the repository
     * name: The name of the repository.
     * private: Whether the repository is private or public.
     */
    public function __construct(#[MapFrom('full_name')]
    public string $fullName, public int $id, public string $name, #[MapFrom('node_id')]
    public string $nodeId, public bool $private,)
    {
    }
}
