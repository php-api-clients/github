<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet98658574\TietA85321D0\Tiet6D8839E8;

abstract readonly class TietDC0C852E
{
    public const SCHEMA_JSON         = '{
    "required": [
        "apps"
    ],
    "type": "object",
    "properties": {
        "apps": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The GitHub Apps that have push access to this branch. Use the slugified version of the app name. **Note**: The list of users, apps, and teams in total is limited to 100 items."
        }
    },
    "example": {
        "apps": [
            "my-app"
        ]
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "apps": [
        "generated",
        "generated"
    ]
}';

    /**
     * apps: The GitHub Apps that have push access to this branch. Use the slugified version of the app name. **Note**: The list of users, apps, and teams in total is limited to 100 items.
     */
    public function __construct(public array $apps)
    {
    }
}
