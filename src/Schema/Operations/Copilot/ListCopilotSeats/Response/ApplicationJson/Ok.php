<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "total_seats": {
            "type": "integer",
            "description": "Total number of Copilot seats for the organization currently being billed."
        },
        "seats": {
            "type": "array",
            "items": {
                "title": "Copilot Business Seat Detail",
                "required": [
                    "assignee",
                    "created_at"
                ],
                "type": "object",
                "properties": {
                    "assignee": {
                        "type": "object",
                        "oneOf": [
                            {
                                "title": "Simple User",
                                "required": [
                                    "avatar_url",
                                    "events_url",
                                    "followers_url",
                                    "following_url",
                                    "gists_url",
                                    "gravatar_id",
                                    "html_url",
                                    "id",
                                    "node_id",
                                    "login",
                                    "organizations_url",
                                    "received_events_url",
                                    "repos_url",
                                    "site_admin",
                                    "starred_url",
                                    "subscriptions_url",
                                    "type",
                                    "url"
                                ],
                                "type": "object",
                                "properties": {
                                    "name": {
                                        "type": [
                                            "string",
                                            "null"
                                        ]
                                    },
                                    "email": {
                                        "type": [
                                            "string",
                                            "null"
                                        ]
                                    },
                                    "login": {
                                        "type": "string",
                                        "examples": [
                                            "octocat"
                                        ]
                                    },
                                    "id": {
                                        "type": "integer",
                                        "examples": [
                                            1
                                        ]
                                    },
                                    "node_id": {
                                        "type": "string",
                                        "examples": [
                                            "MDQ6VXNlcjE="
                                        ]
                                    },
                                    "avatar_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
                                        ]
                                    },
                                    "gravatar_id": {
                                        "type": [
                                            "string",
                                            "null"
                                        ],
                                        "examples": [
                                            "41d064eb2195891e12d0413f63227ea7"
                                        ]
                                    },
                                    "url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/users\\/octocat"
                                        ]
                                    },
                                    "html_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/github.com\\/octocat"
                                        ]
                                    },
                                    "followers_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/users\\/octocat\\/followers"
                                        ]
                                    },
                                    "following_url": {
                                        "type": "string",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"
                                        ]
                                    },
                                    "gists_url": {
                                        "type": "string",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"
                                        ]
                                    },
                                    "starred_url": {
                                        "type": "string",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"
                                        ]
                                    },
                                    "subscriptions_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"
                                        ]
                                    },
                                    "organizations_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"
                                        ]
                                    },
                                    "repos_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/users\\/octocat\\/repos"
                                        ]
                                    },
                                    "events_url": {
                                        "type": "string",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"
                                        ]
                                    },
                                    "received_events_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"
                                        ]
                                    },
                                    "type": {
                                        "type": "string",
                                        "examples": [
                                            "User"
                                        ]
                                    },
                                    "site_admin": {
                                        "type": "boolean"
                                    },
                                    "starred_at": {
                                        "type": "string",
                                        "examples": [
                                            "\\"2020-07-09T00:17:55Z\\""
                                        ]
                                    }
                                },
                                "description": "A GitHub user."
                            },
                            {
                                "title": "Team",
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
                                "description": "Groups of organization members that gives permissions on specified repositories."
                            },
                            {
                                "title": "Organization",
                                "required": [
                                    "login",
                                    "url",
                                    "id",
                                    "node_id",
                                    "repos_url",
                                    "events_url",
                                    "hooks_url",
                                    "issues_url",
                                    "members_url",
                                    "public_members_url",
                                    "avatar_url",
                                    "description",
                                    "html_url",
                                    "has_organization_projects",
                                    "has_repository_projects",
                                    "public_repos",
                                    "public_gists",
                                    "followers",
                                    "following",
                                    "type",
                                    "created_at",
                                    "updated_at"
                                ],
                                "type": "object",
                                "properties": {
                                    "login": {
                                        "type": "string",
                                        "description": "Unique login name of the organization",
                                        "examples": [
                                            "new-org"
                                        ]
                                    },
                                    "url": {
                                        "type": "string",
                                        "description": "URL for the organization",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/orgs\\/github"
                                        ]
                                    },
                                    "id": {
                                        "type": "integer"
                                    },
                                    "node_id": {
                                        "type": "string"
                                    },
                                    "repos_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "events_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "hooks_url": {
                                        "type": "string"
                                    },
                                    "issues_url": {
                                        "type": "string"
                                    },
                                    "members_url": {
                                        "type": "string"
                                    },
                                    "public_members_url": {
                                        "type": "string"
                                    },
                                    "avatar_url": {
                                        "type": "string"
                                    },
                                    "description": {
                                        "type": [
                                            "string",
                                            "null"
                                        ]
                                    },
                                    "blog": {
                                        "type": "string",
                                        "description": "Display blog url for the organization",
                                        "format": "uri",
                                        "examples": [
                                            "blog.example-org.com"
                                        ]
                                    },
                                    "html_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "name": {
                                        "type": "string",
                                        "description": "Display name for the organization",
                                        "examples": [
                                            "New Org"
                                        ]
                                    },
                                    "company": {
                                        "type": "string",
                                        "description": "Display company name for the organization",
                                        "examples": [
                                            "Acme corporation"
                                        ]
                                    },
                                    "location": {
                                        "type": "string",
                                        "description": "Display location for the organization",
                                        "examples": [
                                            "Berlin, Germany"
                                        ]
                                    },
                                    "email": {
                                        "type": "string",
                                        "description": "Display email for the organization",
                                        "format": "email",
                                        "examples": [
                                            "org@example.com"
                                        ]
                                    },
                                    "has_organization_projects": {
                                        "type": "boolean",
                                        "description": "Specifies if organization projects are enabled for this org"
                                    },
                                    "has_repository_projects": {
                                        "type": "boolean",
                                        "description": "Specifies if repository projects are enabled for repositories that belong to this org"
                                    },
                                    "is_verified": {
                                        "type": "boolean"
                                    },
                                    "public_repos": {
                                        "type": "integer"
                                    },
                                    "public_gists": {
                                        "type": "integer"
                                    },
                                    "followers": {
                                        "type": "integer"
                                    },
                                    "following": {
                                        "type": "integer"
                                    },
                                    "type": {
                                        "type": "string"
                                    },
                                    "created_at": {
                                        "type": "string",
                                        "format": "date-time"
                                    },
                                    "updated_at": {
                                        "type": "string",
                                        "format": "date-time"
                                    },
                                    "plan": {
                                        "type": "object",
                                        "properties": {
                                            "name": {
                                                "type": "string"
                                            },
                                            "space": {
                                                "type": "integer"
                                            },
                                            "private_repos": {
                                                "type": "integer"
                                            },
                                            "filled_seats": {
                                                "type": "integer"
                                            },
                                            "seats": {
                                                "type": "integer"
                                            }
                                        }
                                    }
                                },
                                "description": "GitHub account for managing multiple users, teams, and repositories"
                            }
                        ],
                        "description": "The assignee that has been granted access to GitHub Copilot.",
                        "additionalProperties": true
                    },
                    "organization": {
                        "type": [
                            "object",
                            "null"
                        ],
                        "oneOf": [
                            {
                                "title": "Organization Simple",
                                "required": [
                                    "login",
                                    "url",
                                    "id",
                                    "node_id",
                                    "repos_url",
                                    "events_url",
                                    "hooks_url",
                                    "issues_url",
                                    "members_url",
                                    "public_members_url",
                                    "avatar_url",
                                    "description"
                                ],
                                "type": "object",
                                "properties": {
                                    "login": {
                                        "type": "string",
                                        "examples": [
                                            "github"
                                        ]
                                    },
                                    "id": {
                                        "type": "integer",
                                        "examples": [
                                            1
                                        ]
                                    },
                                    "node_id": {
                                        "type": "string",
                                        "examples": [
                                            "MDEyOk9yZ2FuaXphdGlvbjE="
                                        ]
                                    },
                                    "url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/orgs\\/github"
                                        ]
                                    },
                                    "repos_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/orgs\\/github\\/repos"
                                        ]
                                    },
                                    "events_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/orgs\\/github\\/events"
                                        ]
                                    },
                                    "hooks_url": {
                                        "type": "string",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/orgs\\/github\\/hooks"
                                        ]
                                    },
                                    "issues_url": {
                                        "type": "string",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/orgs\\/github\\/issues"
                                        ]
                                    },
                                    "members_url": {
                                        "type": "string",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}"
                                        ]
                                    },
                                    "public_members_url": {
                                        "type": "string",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}"
                                        ]
                                    },
                                    "avatar_url": {
                                        "type": "string",
                                        "examples": [
                                            "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
                                        ]
                                    },
                                    "description": {
                                        "type": [
                                            "string",
                                            "null"
                                        ],
                                        "examples": [
                                            "A great organization"
                                        ]
                                    }
                                },
                                "description": "A GitHub organization."
                            }
                        ],
                        "description": "The organization to which this seat belongs."
                    },
                    "assigning_team": {
                        "type": [
                            "null",
                            "object"
                        ],
                        "oneOf": [
                            {
                                "title": "Team",
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
                                "description": "Groups of organization members that gives permissions on specified repositories."
                            },
                            {
                                "title": "Enterprise Team",
                                "required": [
                                    "id",
                                    "url",
                                    "members_url",
                                    "sync_to_organizations",
                                    "name",
                                    "html_url",
                                    "slug",
                                    "created_at",
                                    "updated_at"
                                ],
                                "type": "object",
                                "properties": {
                                    "id": {
                                        "type": "integer"
                                    },
                                    "name": {
                                        "type": "string"
                                    },
                                    "slug": {
                                        "type": "string"
                                    },
                                    "url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "sync_to_organizations": {
                                        "type": "string",
                                        "examples": [
                                            "disabled | all"
                                        ]
                                    },
                                    "group_id": {
                                        "type": [
                                            "integer",
                                            "null"
                                        ],
                                        "examples": [
                                            1
                                        ]
                                    },
                                    "html_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/github.com\\/enterprises\\/dc\\/teams\\/justice-league"
                                        ]
                                    },
                                    "members_url": {
                                        "type": "string"
                                    },
                                    "created_at": {
                                        "type": "string",
                                        "format": "date-time"
                                    },
                                    "updated_at": {
                                        "type": "string",
                                        "format": "date-time"
                                    }
                                },
                                "description": "Group of enterprise owners and\\/or members"
                            }
                        ],
                        "description": "The team through which the assignee is granted access to GitHub Copilot, if applicable."
                    },
                    "pending_cancellation_date": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The pending cancellation date for the seat, in `YYYY-MM-DD` format. This will be null unless the assignee\'s Copilot access has been canceled during the current billing cycle. If the seat has been cancelled, this corresponds to the start of the organization\'s next billing cycle.",
                        "format": "date"
                    },
                    "last_activity_at": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "Timestamp of user\'s last GitHub Copilot activity, in ISO 8601 format.",
                        "format": "date-time"
                    },
                    "last_activity_editor": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "Last editor that was used by the user for a GitHub Copilot completion."
                    },
                    "created_at": {
                        "type": "string",
                        "description": "Timestamp of when the assignee was last granted access to GitHub Copilot, in ISO 8601 format.",
                        "format": "date-time"
                    },
                    "updated_at": {
                        "type": "string",
                        "description": "Timestamp of when the assignee\'s GitHub Copilot access was last updated, in ISO 8601 format.",
                        "format": "date-time"
                    }
                },
                "description": "Information about a Copilot Business seat assignment for a user, team, or organization.",
                "additionalProperties": false
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_seats": 11,
    "seats": [
        {
            "assignee": null,
            "organization": null,
            "assigning_team": null,
            "pending_cancellation_date": "generated",
            "last_activity_at": "1970-01-01T00:00:00+00:00",
            "last_activity_editor": "generated",
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00"
        },
        {
            "assignee": null,
            "organization": null,
            "assigning_team": null,
            "pending_cancellation_date": "generated",
            "last_activity_at": "1970-01-01T00:00:00+00:00",
            "last_activity_editor": "generated",
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00"
        }
    ]
}';

    /**
     * totalSeats: Total number of Copilot seats for the organization currently being billed.
     */
    public function __construct(#[MapFrom('total_seats')]
    public int|null $totalSeats, public array|null $seats,)
    {
    }
}
