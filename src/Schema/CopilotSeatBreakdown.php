<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CopilotSeatBreakdown
{
    public const SCHEMA_JSON         = '{
    "title": "Copilot Business Seat Breakdown",
    "type": "object",
    "properties": {
        "total": {
            "type": "integer",
            "description": "The total number of seats being billed for the organization as of the current billing cycle."
        },
        "added_this_cycle": {
            "type": "integer",
            "description": "Seats added during the current billing cycle."
        },
        "pending_cancellation": {
            "type": "integer",
            "description": "The number of seats that are pending cancellation at the end of the current billing cycle."
        },
        "pending_invitation": {
            "type": "integer",
            "description": "The number of seats that have been assigned to users that have not yet accepted an invitation to this organization."
        },
        "active_this_cycle": {
            "type": "integer",
            "description": "The number of seats that have used Copilot during the current billing cycle."
        },
        "inactive_this_cycle": {
            "type": "integer",
            "description": "The number of seats that have not used Copilot during the current billing cycle."
        }
    },
    "description": "The breakdown of Copilot Business seats for the organization."
}';
    public const SCHEMA_TITLE        = 'Copilot Business Seat Breakdown';
    public const SCHEMA_DESCRIPTION  = 'The breakdown of Copilot Business seats for the organization.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total": 5,
    "added_this_cycle": 16,
    "pending_cancellation": 20,
    "pending_invitation": 18,
    "active_this_cycle": 17,
    "inactive_this_cycle": 19
}';

    /**
     * total: The total number of seats being billed for the organization as of the current billing cycle.
     * addedThisCycle: Seats added during the current billing cycle.
     * pendingCancellation: The number of seats that are pending cancellation at the end of the current billing cycle.
     * pendingInvitation: The number of seats that have been assigned to users that have not yet accepted an invitation to this organization.
     * activeThisCycle: The number of seats that have used Copilot during the current billing cycle.
     * inactiveThisCycle: The number of seats that have not used Copilot during the current billing cycle.
     */
    public function __construct(public int|null $total, #[MapFrom('added_this_cycle')]
    public int|null $addedThisCycle, #[MapFrom('pending_cancellation')]
    public int|null $pendingCancellation, #[MapFrom('pending_invitation')]
    public int|null $pendingInvitation, #[MapFrom('active_this_cycle')]
    public int|null $activeThisCycle, #[MapFrom('inactive_this_cycle')]
    public int|null $inactiveThisCycle,)
    {
    }
}
