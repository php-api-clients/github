<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\FileCommit\Commit;

final readonly class Tree
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "url": {
            "type": "string"
        },
        "sha": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "generated",
    "sha": "generated"
}';

    public function __construct(public string|null $url, public string|null $sha)
    {
    }
}
