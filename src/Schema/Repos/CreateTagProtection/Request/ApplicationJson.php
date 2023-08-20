<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreateTagProtection\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "pattern"
    ],
    "type": "object",
    "properties": {
        "pattern": {
            "type": "string",
            "description": "An optional glob pattern to match against when enforcing tag protection."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "pattern": "generated"
}';

    /**
     * pattern: An optional glob pattern to match against when enforcing tag protection.
     */
    public function __construct(public string $pattern)
    {
    }
}
