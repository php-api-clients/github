<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Copilot\CancelCopilotSeatAssignmentForUsers\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "selected_usernames"
    ],
    "type": "object",
    "properties": {
        "selected_usernames": {
            "minItems": 1,
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The usernames of the organization members for which to revoke access to GitHub Copilot."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "selected_usernames": [
        "generated"
    ]
}';

    /**
     * selectedUsernames: The usernames of the organization members for which to revoke access to GitHub Copilot.
     */
    public function __construct(#[MapFrom('selected_usernames')]
    public array $selectedUsernames,)
    {
    }
}
