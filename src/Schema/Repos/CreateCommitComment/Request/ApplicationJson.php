<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreateCommitComment\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "body"
    ],
    "type": "object",
    "properties": {
        "body": {
            "type": "string",
            "description": "The contents of the comment."
        },
        "path": {
            "type": "string",
            "description": "Relative path of the file to comment on."
        },
        "position": {
            "type": "integer",
            "description": "Line index in the diff to comment on."
        },
        "line": {
            "type": "integer",
            "description": "**Closing down notice**. Use **position** parameter instead. Line number in the file to comment on."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "body": "generated",
    "path": "generated",
    "position": 8,
    "line": 4
}';

    /**
     * body: The contents of the comment.
     * path: Relative path of the file to comment on.
     * position: Line index in the diff to comment on.
     * line: **Closing down notice**. Use **position** parameter instead. Line number in the file to comment on.
     */
    public function __construct(public string $body, public string|null $path, public int|null $position, public int|null $line)
    {
    }
}
