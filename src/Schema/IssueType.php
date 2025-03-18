<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class IssueType
{
    public const SCHEMA_JSON         = '{
    "title": "Issue Type",
    "required": [
        "id",
        "node_id",
        "name",
        "description"
    ],
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "id": {
            "type": "integer",
            "description": "The unique identifier of the issue type."
        },
        "node_id": {
            "type": "string",
            "description": "The node identifier of the issue type."
        },
        "name": {
            "type": "string",
            "description": "The name of the issue type."
        },
        "description": {
            "type": [
                "string",
                "null"
            ],
            "description": "The description of the issue type."
        },
        "color": {
            "enum": [
                "gray",
                "blue",
                "green",
                "yellow",
                "orange",
                "red",
                "pink",
                "purple",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The color of the issue type."
        },
        "created_at": {
            "type": "string",
            "description": "The time the issue type created.",
            "format": "date-time"
        },
        "updated_at": {
            "type": "string",
            "description": "The time the issue type last updated.",
            "format": "date-time"
        },
        "is_enabled": {
            "type": "boolean",
            "description": "The enabled state of the issue type."
        }
    },
    "description": "The type of issue."
}';
    public const SCHEMA_TITLE        = 'Issue Type';
    public const SCHEMA_DESCRIPTION  = 'The type of issue.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "node_id": "generated",
    "name": "generated",
    "description": "generated",
    "color": "gray",
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "is_enabled": false
}';

    /**
     * id: The unique identifier of the issue type.
     * nodeId: The node identifier of the issue type.
     * name: The name of the issue type.
     * description: The description of the issue type.
     * color: The color of the issue type.
     * createdAt: The time the issue type created.
     * updatedAt: The time the issue type last updated.
     * isEnabled: The enabled state of the issue type.
     */
    public function __construct(public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $name, public string|null $description, public string|null $color, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('updated_at')]
    public string|null $updatedAt, #[MapFrom('is_enabled')]
    public bool|null $isEnabled,)
    {
    }
}
