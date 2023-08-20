<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class TeamProject
{
    public const SCHEMA_JSON         = '{
    "title": "Team Project",
    "required": [
        "owner_url",
        "url",
        "html_url",
        "columns_url",
        "id",
        "node_id",
        "name",
        "body",
        "number",
        "state",
        "creator",
        "created_at",
        "updated_at",
        "permissions"
    ],
    "type": "object",
    "properties": {
        "owner_url": {
            "type": "string"
        },
        "url": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "columns_url": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "node_id": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "body": {
            "type": [
                "string",
                "null"
            ]
        },
        "number": {
            "type": "integer"
        },
        "state": {
            "type": "string"
        },
        "creator": {
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
        "created_at": {
            "type": "string"
        },
        "updated_at": {
            "type": "string"
        },
        "organization_permission": {
            "type": "string",
            "description": "The organization permission for this project. Only present when owner is an organization."
        },
        "private": {
            "type": "boolean",
            "description": "Whether the project is private or not. Only present when owner is an organization."
        },
        "permissions": {
            "required": [
                "read",
                "write",
                "admin"
            ],
            "type": "object",
            "properties": {
                "read": {
                    "type": "boolean"
                },
                "write": {
                    "type": "boolean"
                },
                "admin": {
                    "type": "boolean"
                }
            }
        }
    },
    "description": "A team\'s access to a project."
}';
    public const SCHEMA_TITLE        = 'Team Project';
    public const SCHEMA_DESCRIPTION  = 'A team\'s access to a project.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "owner_url": "generated",
    "url": "generated",
    "html_url": "generated",
    "columns_url": "generated",
    "id": 2,
    "node_id": "generated",
    "name": "generated",
    "body": "generated",
    "number": 6,
    "state": "generated",
    "creator": {
        "name": "generated",
        "email": "generated",
        "login": "octocat",
        "id": 1,
        "node_id": "MDQ6VXNlcjE=",
        "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
        "gravatar_id": "41d064eb2195891e12d0413f63227ea7",
        "url": "https:\\/\\/api.github.com\\/users\\/octocat",
        "html_url": "https:\\/\\/github.com\\/octocat",
        "followers_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/followers",
        "following_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}",
        "gists_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}",
        "starred_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}",
        "subscriptions_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions",
        "organizations_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs",
        "repos_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
        "events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}",
        "received_events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events",
        "type": "User",
        "site_admin": false,
        "starred_at": "\\"2020-07-09T00:17:55Z\\""
    },
    "created_at": "generated",
    "updated_at": "generated",
    "organization_permission": "generated",
    "private": false,
    "permissions": {
        "read": false,
        "write": false,
        "admin": false
    }
}';

    /**
     * creator: A GitHub user.
     * organizationPermission: The organization permission for this project. Only present when owner is an organization.
     * private: Whether the project is private or not. Only present when owner is an organization.
     */
    public function __construct(#[MapFrom('owner_url')]
    public string $ownerUrl, public string $url, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('columns_url')]
    public string $columnsUrl, public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $name, public string|null $body, public int $number, public string $state, public Schema\SimpleUser $creator, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('organization_permission')]
    public string|null $organizationPermission, public bool|null $private, public Schema\TeamProject\Permissions $permissions,)
    {
    }
}
