<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class IssueEventProjectCard
{
    public const SCHEMA_JSON         = '{
    "title": "Issue Event Project Card",
    "required": [
        "url",
        "id",
        "project_url",
        "project_id",
        "column_name"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string",
            "format": "uri"
        },
        "id": {
            "type": "integer"
        },
        "project_url": {
            "type": "string",
            "format": "uri"
        },
        "project_id": {
            "type": "integer"
        },
        "column_name": {
            "type": "string"
        },
        "previous_column_name": {
            "type": "string"
        }
    },
    "description": "Issue Event Project Card"
}';
    public const SCHEMA_TITLE        = 'Issue Event Project Card';
    public const SCHEMA_DESCRIPTION  = 'Issue Event Project Card';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "https:\\/\\/example.com\\/",
    "id": 2,
    "project_url": "https:\\/\\/example.com\\/",
    "project_id": 10,
    "column_name": "generated",
    "previous_column_name": "generated"
}';

    public function __construct(public string $url, public int $id, #[MapFrom('project_url')]
    public string $projectUrl, #[MapFrom('project_id')]
    public int $projectId, #[MapFrom('column_name')]
    public string $columnName, #[MapFrom('previous_column_name')]
    public string|null $previousColumnName,)
    {
    }
}
