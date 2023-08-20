<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Event;

final readonly class Repo
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "name",
        "url"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "name": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "name": "generated",
    "url": "https:\\/\\/example.com\\/"
}';

    public function __construct(public int $id, public string $name, public string $url)
    {
    }
}
