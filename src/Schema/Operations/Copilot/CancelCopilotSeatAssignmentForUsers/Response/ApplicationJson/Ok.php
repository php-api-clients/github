<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "required": [
        "seats_cancelled"
    ],
    "type": "object",
    "properties": {
        "seats_cancelled": {
            "type": "integer"
        }
    },
    "description": "The total number of seats set to \\"pending cancellation\\" for the specified users."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The total number of seats set to "pending cancellation" for the specified users.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "seats_cancelled": 15
}';

    public function __construct(#[MapFrom('seats_cancelled')]
    public int $seatsCancelled,)
    {
    }
}
