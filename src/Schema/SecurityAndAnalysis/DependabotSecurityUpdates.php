<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SecurityAndAnalysis;

final readonly class DependabotSecurityUpdates
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "status": {
            "enum": [
                "enabled",
                "disabled"
            ],
            "type": "string",
            "description": "The enablement status of Dependabot security updates for the repository."
        }
    },
    "description": "Enable or disable Dependabot security updates for the repository."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Enable or disable Dependabot security updates for the repository.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "status": "disabled"
}';

    /**
     * status: The enablement status of Dependabot security updates for the repository.
     */
    public function __construct(public string|null $status)
    {
    }
}
