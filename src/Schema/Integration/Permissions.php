<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Integration;

final readonly class Permissions
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "issues": {
            "type": "string"
        },
        "checks": {
            "type": "string"
        },
        "metadata": {
            "type": "string"
        },
        "contents": {
            "type": "string"
        },
        "deployments": {
            "type": "string"
        }
    },
    "description": "The set of permissions for the GitHub app",
    "example": {
        "issues": "read",
        "deployments": "write"
    },
    "additionalProperties": {
        "type": "string"
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The set of permissions for the GitHub app';
    public const SCHEMA_EXAMPLE_DATA = '{
    "issues": "generated",
    "checks": "generated",
    "metadata": "generated",
    "contents": "generated",
    "deployments": "generated"
}';

    public function __construct(public string|null $issues, public string|null $checks, public string|null $metadata, public string|null $contents, public string|null $deployments)
    {
    }
}
