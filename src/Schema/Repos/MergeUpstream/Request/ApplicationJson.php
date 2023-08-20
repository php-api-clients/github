<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\MergeUpstream\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "branch"
    ],
    "type": "object",
    "properties": {
        "branch": {
            "type": "string",
            "description": "The name of the branch which should be updated to match upstream."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "branch": "generated"
}';

    /**
     * branch: The name of the branch which should be updated to match upstream.
     */
    public function __construct(public string $branch)
    {
    }
}
