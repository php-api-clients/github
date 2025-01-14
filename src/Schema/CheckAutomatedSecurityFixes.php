<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CheckAutomatedSecurityFixes
{
    public const SCHEMA_JSON         = '{
    "title": "Check Dependabot security updates",
    "required": [
        "enabled",
        "paused"
    ],
    "type": "object",
    "properties": {
        "enabled": {
            "type": "boolean",
            "description": "Whether Dependabot security updates are enabled for the repository.",
            "examples": [
                true
            ]
        },
        "paused": {
            "type": "boolean",
            "description": "Whether Dependabot security updates are paused for the repository.",
            "examples": [
                false
            ]
        }
    },
    "description": "Check Dependabot security updates"
}';
    public const SCHEMA_TITLE        = 'Check Dependabot security updates';
    public const SCHEMA_DESCRIPTION  = 'Check Dependabot security updates';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled": true,
    "paused": false
}';

    /**
     * enabled: Whether Dependabot security updates are enabled for the repository.
     * paused: Whether Dependabot security updates are paused for the repository.
     */
    public function __construct(public bool $enabled, public bool $paused)
    {
    }
}
