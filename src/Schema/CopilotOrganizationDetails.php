<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class CopilotOrganizationDetails
{
    public const SCHEMA_JSON         = '{
    "title": "Copilot Business Organization Details",
    "required": [
        "seat_breakdown",
        "public_code_suggestions",
        "seat_management_setting"
    ],
    "type": "object",
    "properties": {
        "seat_breakdown": {
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
        },
        "public_code_suggestions": {
            "enum": [
                "allow",
                "block",
                "unconfigured",
                "unknown"
            ],
            "type": "string",
            "description": "The organization policy for allowing or disallowing Copilot to make suggestions that match public code."
        },
        "copilot_chat": {
            "enum": [
                "enabled",
                "disabled",
                "unconfigured"
            ],
            "type": "string",
            "description": "The organization policy for allowing or disallowing organization members to use Copilot Chat within their editor."
        },
        "seat_management_setting": {
            "enum": [
                "assign_all",
                "assign_selected",
                "disabled",
                "unconfigured"
            ],
            "type": "string",
            "description": "The mode of assigning new seats."
        }
    },
    "description": "Information about the seat breakdown and policies set for an organization with a Copilot Business subscription.",
    "additionalProperties": true
}';
    public const SCHEMA_TITLE        = 'Copilot Business Organization Details';
    public const SCHEMA_DESCRIPTION  = 'Information about the seat breakdown and policies set for an organization with a Copilot Business subscription.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "seat_breakdown": {
        "total": 5,
        "added_this_cycle": 16,
        "pending_cancellation": 20,
        "pending_invitation": 18,
        "active_this_cycle": 17,
        "inactive_this_cycle": 19
    },
    "public_code_suggestions": "allow",
    "copilot_chat": "unconfigured",
    "seat_management_setting": "assign_all"
}';

    /**
     * seatBreakdown: The breakdown of Copilot Business seats for the organization.
     * publicCodeSuggestions: The organization policy for allowing or disallowing Copilot to make suggestions that match public code.
     * copilotChat: The organization policy for allowing or disallowing organization members to use Copilot Chat within their editor.
     * seatManagementSetting: The mode of assigning new seats.
     */
    public function __construct(#[MapFrom('seat_breakdown')]
    public Schema\CopilotSeatBreakdown $seatBreakdown, #[MapFrom('public_code_suggestions')]
    public string $publicCodeSuggestions, #[MapFrom('copilot_chat')]
    public string|null $copilotChat, #[MapFrom('seat_management_setting')]
    public string $seatManagementSetting,)
    {
    }
}
