<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleParamsRestrictedCommits
{
    public const SCHEMA_JSON         = '{
    "title": "RestrictedCommits",
    "required": [
        "oid"
    ],
    "type": "object",
    "properties": {
        "oid": {
            "type": "string",
            "description": "Full or abbreviated commit hash to reject"
        },
        "reason": {
            "type": "string",
            "description": "Reason for restriction"
        }
    },
    "description": "Restricted commit"
}';
    public const SCHEMA_TITLE        = 'RestrictedCommits';
    public const SCHEMA_DESCRIPTION  = 'Restricted commit';
    public const SCHEMA_EXAMPLE_DATA = '{
    "oid": "generated",
    "reason": "generated"
}';

    /**
     * oid: Full or abbreviated commit hash to reject
     * reason: Reason for restriction
     */
    public function __construct(public string $oid, public string|null $reason)
    {
    }
}
