<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson;

final readonly class Restrictions
{
    public const SCHEMA_JSON         = '{
    "required": [
        "users",
        "teams"
    ],
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "users": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The list of user `login`s with push access"
        },
        "teams": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The list of team `slug`s with push access"
        },
        "apps": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The list of app `slug`s with push access"
        }
    },
    "description": "Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "users": [
        "generated",
        "generated"
    ],
    "teams": [
        "generated",
        "generated"
    ],
    "apps": [
        "generated",
        "generated"
    ]
}';

    /**
     * users: The list of user `login`s with push access
     * teams: The list of team `slug`s with push access
     * apps: The list of app `slug`s with push access
     */
    public function __construct(public array $users, public array $teams, public array|null $apps)
    {
    }
}
