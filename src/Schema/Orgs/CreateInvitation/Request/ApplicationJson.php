<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Orgs\CreateInvitation\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "invitee_id": {
            "type": "integer",
            "description": "**Required unless you provide `email`**. GitHub user ID for the person you are inviting."
        },
        "email": {
            "type": "string",
            "description": "**Required unless you provide `invitee_id`**. Email address of the person you are inviting, which can be an existing GitHub user."
        },
        "role": {
            "enum": [
                "admin",
                "direct_member",
                "billing_manager",
                "reinstate"
            ],
            "type": "string",
            "description": "The role for the new member. \\n * `admin` - Organization owners with full administrative rights to the organization and complete access to all repositories and teams.  \\n * `direct_member` - Non-owner organization members with ability to see other members and join teams by invitation.  \\n * `billing_manager` - Non-owner organization members with ability to manage the billing settings of your organization. \\n * `reinstate` - The previous role assigned to the invitee before they were removed from your organization. Can be one of the roles listed above. Only works if the invitee was previously part of your organization.",
            "default": "direct_member"
        },
        "team_ids": {
            "type": "array",
            "items": {
                "type": "integer"
            },
            "description": "Specify IDs for the teams you want to invite new members to."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "invitee_id": 10,
    "email": "generated",
    "role": "reinstate",
    "team_ids": [
        9,
        10
    ]
}';

    /**
     * inviteeId: **Required unless you provide `email`**. GitHub user ID for the person you are inviting.
     * email: **Required unless you provide `invitee_id`**. Email address of the person you are inviting, which can be an existing GitHub user.
     * role: The role for the new member.
     * `admin` - Organization owners with full administrative rights to the organization and complete access to all repositories and teams.
     * `direct_member` - Non-owner organization members with ability to see other members and join teams by invitation.
     * `billing_manager` - Non-owner organization members with ability to manage the billing settings of your organization.
     * `reinstate` - The previous role assigned to the invitee before they were removed from your organization. Can be one of the roles listed above. Only works if the invitee was previously part of your organization.
     * teamIds: Specify IDs for the teams you want to invite new members to.
     */
    public function __construct(#[MapFrom('invitee_id')]
    public int|null $inviteeId, public string|null $email, public string|null $role, #[MapFrom('team_ids')]
    public array|null $teamIds,)
    {
    }
}
