<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class PagesSourceHash
{
    public const SCHEMA_JSON         = '{
    "title": "Pages Source Hash",
    "required": [
        "branch",
        "path"
    ],
    "type": "object",
    "properties": {
        "branch": {
            "type": "string"
        },
        "path": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Pages Source Hash';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "branch": "generated",
    "path": "generated"
}';

    public function __construct(public string $branch, public string $path)
    {
    }
}
