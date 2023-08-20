<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Teams\UpdateLegacy\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the team."
        },
        "description": {
            "type": "string",
            "description": "The description of the team."
        },
        "privacy": {
            "enum": [
                "secret",
                "closed"
            ],
            "type": "string",
            "description": "The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. The options are:  \\n**For a non-nested team:**  \\n * `secret` - only visible to organization owners and members of this team.  \\n * `closed` - visible to all members of this organization.  \\n**For a parent or child team:**  \\n * `closed` - visible to all members of this organization."
        },
        "notification_setting": {
            "enum": [
                "notifications_enabled",
                "notifications_disabled"
            ],
            "type": "string",
            "description": "The notification setting the team has chosen. Editing teams without specifying this parameter leaves `notification_setting` intact. The options are: \\n * `notifications_enabled` - team members receive notifications when the team is @mentioned.  \\n * `notifications_disabled` - no one receives notifications."
        },
        "permission": {
            "enum": [
                "pull",
                "push",
                "admin"
            ],
            "type": "string",
            "description": "**Deprecated**. The permission that new repositories will be added to the team with when none is specified.",
            "default": "pull"
        },
        "parent_team_id": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The ID of a team to set as the parent team."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "description": "generated",
    "privacy": "secret",
    "notification_setting": "notifications_disabled",
    "permission": "admin",
    "parent_team_id": 14
}';

    /**
     * name: The name of the team.
     * description: The description of the team.
     * privacy: The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. The options are:
     * *For a non-nested team:**
     * `secret` - only visible to organization owners and members of this team.
     * `closed` - visible to all members of this organization.
     * *For a parent or child team:**
     * `closed` - visible to all members of this organization.
     * notificationSetting: The notification setting the team has chosen. Editing teams without specifying this parameter leaves `notification_setting` intact. The options are:
     * `notifications_enabled` - team members receive notifications when the team is @mentioned.
     * `notifications_disabled` - no one receives notifications.
     * permission: **Deprecated**. The permission that new repositories will be added to the team with when none is specified.
     * parentTeamId: The ID of a team to set as the parent team.
     */
    public function __construct(public string $name, public string|null $description, public string|null $privacy, #[MapFrom('notification_setting')]
    public string|null $notificationSetting, public string|null $permission, #[MapFrom('parent_team_id')]
    public int|null $parentTeamId,)
    {
    }
}
