<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodespacesPermissionsCheckForDevcontainer
{
    public const SCHEMA_JSON         = '{
    "title": "Codespaces Permissions Check",
    "required": [
        "accepted"
    ],
    "type": "object",
    "properties": {
        "accepted": {
            "type": "boolean",
            "description": "Whether the user has accepted the permissions defined by the devcontainer config",
            "examples": [
                true
            ]
        }
    },
    "description": "Permission check result for a given devcontainer config."
}';
    public const SCHEMA_TITLE        = 'Codespaces Permissions Check';
    public const SCHEMA_DESCRIPTION  = 'Permission check result for a given devcontainer config.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "accepted": true
}';

    /**
     * accepted: Whether the user has accepted the permissions defined by the devcontainer config
     */
    public function __construct(public bool $accepted)
    {
    }
}
