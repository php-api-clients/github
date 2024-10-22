<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Teams\Create\Request;

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
        "maintainers": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "List GitHub IDs for organization members who will become team maintainers."
        },
        "repo_names": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The full name (e.g., \\"organization-name\\/repository-name\\") of repositories to add the team to."
        },
        "privacy": {
            "enum": [
                "secret",
                "closed"
            ],
            "type": "string",
            "description": "The level of privacy this team should have. The options are:  \\n**For a non-nested team:**  \\n * `secret` - only visible to organization owners and members of this team.  \\n * `closed` - visible to all members of this organization.  \\nDefault: `secret`  \\n**For a parent or child team:**  \\n * `closed` - visible to all members of this organization.  \\nDefault for child team: `closed`"
        },
        "notification_setting": {
            "enum": [
                "notifications_enabled",
                "notifications_disabled"
            ],
            "type": "string",
            "description": "The notification setting the team has chosen. The options are:  \\n * `notifications_enabled` - team members receive notifications when the team is @mentioned.  \\n * `notifications_disabled` - no one receives notifications.  \\nDefault: `notifications_enabled`"
        },
        "permission": {
            "enum": [
                "pull",
                "push"
            ],
            "type": "string",
            "description": "**Closing down notice**. The permission that new repositories will be added to the team with when none is specified.",
            "default": "pull"
        },
        "parent_team_id": {
            "type": "integer",
            "description": "The ID of a team to set as the parent team."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "description": "generated",
    "maintainers": [
        "generated",
        "generated"
    ],
    "repo_names": [
        "generated",
        "generated"
    ],
    "privacy": "secret",
    "notification_setting": "notifications_disabled",
    "permission": "push",
    "parent_team_id": 14
}';

    /**
     * name: The name of the team.
     * description: The description of the team.
     * maintainers: List GitHub IDs for organization members who will become team maintainers.
     * repoNames: The full name (e.g., "organization-name/repository-name") of repositories to add the team to.
     * privacy: The level of privacy this team should have. The options are:
     * *For a non-nested team:**
     * `secret` - only visible to organization owners and members of this team.
     * `closed` - visible to all members of this organization.
    Default: `secret`
     * *For a parent or child team:**
     * `closed` - visible to all members of this organization.
    Default for child team: `closed`
     * notificationSetting: The notification setting the team has chosen. The options are:
     * `notifications_enabled` - team members receive notifications when the team is @mentioned.
     * `notifications_disabled` - no one receives notifications.
    Default: `notifications_enabled`
     * permission: **Closing down notice**. The permission that new repositories will be added to the team with when none is specified.
     * parentTeamId: The ID of a team to set as the parent team.
     */
    public function __construct(public string $name, public string|null $description, public array|null $maintainers, #[MapFrom('repo_names')]
    public array|null $repoNames, public string|null $privacy, #[MapFrom('notification_setting')]
    public string|null $notificationSetting, public string|null $permission, #[MapFrom('parent_team_id')]
    public int|null $parentTeamId,)
    {
    }
}
