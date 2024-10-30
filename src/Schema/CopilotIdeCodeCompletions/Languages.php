<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CopilotIdeCodeCompletions;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Languages
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "Name of the language used for Copilot code completion suggestions."
        },
        "total_engaged_users": {
            "type": "integer",
            "description": "Number of users who accepted at least one Copilot code completion suggestion for the given language. Includes both full and partial acceptances."
        }
    },
    "description": "Usage metrics for a given language for the given editor for Copilot code completions."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Usage metrics for a given language for the given editor for Copilot code completions.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "total_engaged_users": 19
}';

    /**
     * name: Name of the language used for Copilot code completion suggestions.
     * totalEngagedUsers: Number of users who accepted at least one Copilot code completion suggestion for the given language. Includes both full and partial acceptances.
     */
    public function __construct(public string|null $name, #[MapFrom('total_engaged_users')]
    public int|null $totalEngagedUsers,)
    {
    }
}
