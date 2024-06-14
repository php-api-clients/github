<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class TeamRoleAssignment
{
    public const SCHEMA_JSON         = '{
    "title": "A Role Assignment for a Team",
    "required": [
        "id",
        "node_id",
        "url",
        "members_url",
        "name",
        "description",
        "permission",
        "html_url",
        "repositories_url",
        "slug",
        "parent"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "node_id": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "slug": {
            "type": "string"
        },
        "description": {
            "type": [
                "string",
                "null"
            ]
        },
        "privacy": {
            "type": "string"
        },
        "notification_setting": {
            "type": "string"
        },
        "permission": {
            "type": "string"
        },
        "permissions": {
            "required": [
                "pull",
                "triage",
                "push",
                "maintain",
                "admin"
            ],
            "type": "object",
            "properties": {
                "pull": {
                    "type": "boolean"
                },
                "triage": {
                    "type": "boolean"
                },
                "push": {
                    "type": "boolean"
                },
                "maintain": {
                    "type": "boolean"
                },
                "admin": {
                    "type": "boolean"
                }
            }
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "html_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"
            ]
        },
        "members_url": {
            "type": "string"
        },
        "repositories_url": {
            "type": "string",
            "format": "uri"
        },
        "parent": {
            "anyOf": [
                {
                    "type": "null"
                },
                {
                    "title": "Team Simple",
                    "required": [
                        "id",
                        "node_id",
                        "url",
                        "members_url",
                        "name",
                        "description",
                        "permission",
                        "html_url",
                        "repositories_url",
                        "slug"
                    ],
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer",
                            "description": "Unique identifier of the team",
                            "examples": [
                                1
                            ]
                        },
                        "node_id": {
                            "type": "string",
                            "examples": [
                                "MDQ6VGVhbTE="
                            ]
                        },
                        "url": {
                            "type": "string",
                            "description": "URL for the team",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1"
                            ]
                        },
                        "members_url": {
                            "type": "string",
                            "examples": [
                                "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}"
                            ]
                        },
                        "name": {
                            "type": "string",
                            "description": "Name of the team",
                            "examples": [
                                "Justice League"
                            ]
                        },
                        "description": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "Description of the team",
                            "examples": [
                                "A great team."
                            ]
                        },
                        "permission": {
                            "type": "string",
                            "description": "Permission that the team will have for its repositories",
                            "examples": [
                                "admin"
                            ]
                        },
                        "privacy": {
                            "type": "string",
                            "description": "The level of privacy this team should have",
                            "examples": [
                                "closed"
                            ]
                        },
                        "notification_setting": {
                            "type": "string",
                            "description": "The notification setting the team has set",
                            "examples": [
                                "notifications_enabled"
                            ]
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"
                            ]
                        },
                        "repositories_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos"
                            ]
                        },
                        "slug": {
                            "type": "string",
                            "examples": [
                                "justice-league"
                            ]
                        },
                        "ldap_dn": {
                            "type": "string",
                            "description": "Distinguished Name (DN) that team maps to within LDAP environment",
                            "examples": [
                                "uid=example,ou=users,dc=github,dc=com"
                            ]
                        }
                    },
                    "description": "Groups of organization members that gives permissions on specified repositories."
                }
            ]
        }
    },
    "description": "The Relationship a Team has with a role."
}';
    public const SCHEMA_TITLE        = 'A Role Assignment for a Team';
    public const SCHEMA_DESCRIPTION  = 'The Relationship a Team has with a role.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "node_id": "generated",
    "name": "generated",
    "slug": "generated",
    "description": "generated",
    "privacy": "generated",
    "notification_setting": "generated",
    "permission": "generated",
    "permissions": {
        "pull": false,
        "triage": false,
        "push": false,
        "maintain": false,
        "admin": false
    },
    "url": "https:\\/\\/example.com\\/",
    "html_url": "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core",
    "members_url": "generated",
    "repositories_url": "https:\\/\\/example.com\\/",
    "parent": {
        "id": 1,
        "node_id": "MDQ6VGVhbTE=",
        "url": "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1",
        "members_url": "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}",
        "name": "Justice League",
        "description": "A great team.",
        "permission": "admin",
        "privacy": "closed",
        "notification_setting": "notifications_enabled",
        "html_url": "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core",
        "repositories_url": "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos",
        "slug": "justice-league",
        "ldap_dn": "uid=example,ou=users,dc=github,dc=com"
    }
}';

    public function __construct(public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $name, public string $slug, public string|null $description, public string|null $privacy, #[MapFrom('notification_setting')]
    public string|null $notificationSetting, public string $permission, public Schema\TeamRoleAssignment\Permissions|null $permissions, public string $url, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('members_url')]
    public string $membersUrl, #[MapFrom('repositories_url')]
    public string $repositoriesUrl, public Schema\TeamSimple|null $parent,)
    {
    }
}
