<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Commit;

final readonly class Stats
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "additions": {
            "type": "integer"
        },
        "deletions": {
            "type": "integer"
        },
        "total": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "additions": 9,
    "deletions": 9,
    "total": 5
}';

    public function __construct(public int|null $additions, public int|null $deletions, public int|null $total)
    {
    }
}
