<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class Link
{
    public const SCHEMA_JSON         = '{
    "title": "Link",
    "required": [
        "href"
    ],
    "type": "object",
    "properties": {
        "href": {
            "type": "string"
        }
    },
    "description": "Hypermedia Link"
}';
    public const SCHEMA_TITLE        = 'Link';
    public const SCHEMA_DESCRIPTION  = 'Hypermedia Link';
    public const SCHEMA_EXAMPLE_DATA = '{
    "href": "generated"
}';

    public function __construct(public string $href)
    {
    }
}
