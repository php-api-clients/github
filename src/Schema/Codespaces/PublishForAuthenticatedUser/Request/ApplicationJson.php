<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Codespaces\PublishForAuthenticatedUser\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "A name for the new repository."
        },
        "private": {
            "type": "boolean",
            "description": "Whether the new repository should be private.",
            "default": false
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "private": false
}';

    /**
     * name: A name for the new repository.
     * private: Whether the new repository should be private.
     */
    public function __construct(public string|null $name, public bool|null $private)
    {
    }
}
