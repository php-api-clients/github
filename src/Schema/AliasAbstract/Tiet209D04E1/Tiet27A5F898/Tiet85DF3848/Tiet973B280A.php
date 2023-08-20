<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet209D04E1\Tiet27A5F898\Tiet85DF3848;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet973B280A
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "url",
        "project_id",
        "project_url",
        "column_name"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "project_id": {
            "type": "integer"
        },
        "project_url": {
            "type": "string",
            "format": "uri"
        },
        "column_name": {
            "type": "string"
        },
        "previous_column_name": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "url": "https:\\/\\/example.com\\/",
    "project_id": 10,
    "project_url": "https:\\/\\/example.com\\/",
    "column_name": "generated",
    "previous_column_name": "generated"
}';

    public function __construct(public int $id, public string $url, #[MapFrom('project_id')]
    public int $projectId, #[MapFrom('project_url')]
    public string $projectUrl, #[MapFrom('column_name')]
    public string $columnName, #[MapFrom('previous_column_name')]
    public string|null $previousColumnName,)
    {
    }
}
