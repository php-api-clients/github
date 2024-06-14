<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ProjectsV2IterationSetting
{
    public const SCHEMA_JSON         = '{
    "title": "Projects v2 Iteration Setting",
    "required": [
        "id",
        "title"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "string"
        },
        "title": {
            "type": "string"
        },
        "duration": {
            "type": [
                "number",
                "null"
            ]
        },
        "start_date": {
            "type": [
                "string",
                "null"
            ]
        }
    },
    "description": "An iteration setting for an iteration field"
}';
    public const SCHEMA_TITLE        = 'Projects v2 Iteration Setting';
    public const SCHEMA_DESCRIPTION  = 'An iteration setting for an iteration field';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "generated",
    "title": "generated",
    "duration": 0.8,
    "start_date": "generated"
}';

    public function __construct(public string $id, public string $title, public int|float|null $duration, #[MapFrom('start_date')]
    public string|null $startDate,)
    {
    }
}
