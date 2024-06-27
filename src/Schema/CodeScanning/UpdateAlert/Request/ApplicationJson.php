<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CodeScanning\UpdateAlert\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "state"
    ],
    "type": "object",
    "properties": {
        "state": {
            "enum": [
                "open",
                "dismissed"
            ],
            "type": "string",
            "description": "Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`."
        },
        "dismissed_reason": {
            "enum": [
                "false positive",
                "won\'t fix",
                "used in tests",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "**Required when the state is dismissed.** The reason for dismissing or closing the alert."
        },
        "dismissed_comment": {
            "maxLength": 280,
            "type": [
                "string",
                "null"
            ],
            "description": "The dismissal comment associated with the dismissal of the alert."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "state": "open",
    "dismissed_reason": "used in tests",
    "dismissed_comment": "generated"
}';

    /**
     * state: Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`.
     * dismissedReason: **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     * dismissedComment: The dismissal comment associated with the dismissal of the alert.
     */
    public function __construct(public string $state, #[MapFrom('dismissed_reason')]
    public string|null $dismissedReason, #[MapFrom('dismissed_comment')]
    public string|null $dismissedComment,)
    {
    }
}
