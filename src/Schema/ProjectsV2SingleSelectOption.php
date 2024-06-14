<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class ProjectsV2SingleSelectOption
{
    public const SCHEMA_JSON         = '{
    "title": "Projects v2 Single Select Option",
    "required": [
        "id",
        "name"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "color": {
            "type": [
                "string",
                "null"
            ]
        },
        "description": {
            "type": [
                "string",
                "null"
            ]
        }
    },
    "description": "An option for a single select field"
}';
    public const SCHEMA_TITLE        = 'Projects v2 Single Select Option';
    public const SCHEMA_DESCRIPTION  = 'An option for a single select field';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "generated",
    "name": "generated",
    "color": "generated",
    "description": "generated"
}';

    public function __construct(public string $id, public string $name, public string|null $color, public string|null $description)
    {
    }
}
