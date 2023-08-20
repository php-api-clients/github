<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet6E03D84B\Tiet0584B5F3\Tiet708D9E30;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietA68A0285
{
    public const SCHEMA_JSON         = '{
    "title": "Project Column",
    "required": [
        "url",
        "project_url",
        "cards_url",
        "id",
        "node_id",
        "name",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "after_id": {
            "type": [
                "integer",
                "null"
            ]
        },
        "cards_url": {
            "type": "string",
            "format": "uri"
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "id": {
            "type": "integer",
            "description": "The unique identifier of the project column"
        },
        "name": {
            "type": "string",
            "description": "Name of the project column"
        },
        "node_id": {
            "type": "string"
        },
        "project_url": {
            "type": "string",
            "format": "uri"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Project Column';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "after_id": 8,
    "cards_url": "https:\\/\\/example.com\\/",
    "created_at": "1970-01-01T00:00:00+00:00",
    "id": 2,
    "name": "generated",
    "node_id": "generated",
    "project_url": "https:\\/\\/example.com\\/",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "url": "https:\\/\\/example.com\\/"
}';

    /**
     * id: The unique identifier of the project column
     * name: Name of the project column
     */
    public function __construct(#[MapFrom('after_id')]
    public int|null $afterId, #[MapFrom('cards_url')]
    public string $cardsUrl, #[MapFrom('created_at')]
    public string $createdAt, public int $id, public string $name, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('project_url')]
    public string $projectUrl, #[MapFrom('updated_at')]
    public string $updatedAt, public string $url,)
    {
    }
}
