<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class OrganizationInvitation
{
    public const SCHEMA_JSON         = '{
    "title": "Organization Invitation",
    "required": [
        "id",
        "login",
        "email",
        "role",
        "created_at",
        "inviter",
        "team_count",
        "invitation_teams_url",
        "node_id"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "login": {
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
        "role": {
            "type": "string"
        },
        "created_at": {
            "type": "string"
        },
        "failed_at": {
            "type": [
                "string",
                "null"
            ]
        },
        "failed_reason": {
            "type": [
                "string",
                "null"
            ]
        },
        "inviter": {
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
        "team_count": {
            "type": "integer"
        },
        "node_id": {
            "type": "string",
            "examples": [
                "\\"MDIyOk9yZ2FuaXphdGlvbkludml0YXRpb24x\\""
            ]
        },
        "invitation_teams_url": {
            "type": "string",
            "examples": [
                "\\"https:\\/\\/api.github.com\\/organizations\\/16\\/invitations\\/1\\/teams\\""
            ]
        },
        "invitation_source": {
            "type": "string",
            "examples": [
                "\\"member\\""
            ]
        }
    },
    "description": "Organization Invitation"
}';
    public const SCHEMA_TITLE        = 'Organization Invitation';
    public const SCHEMA_DESCRIPTION  = 'Organization Invitation';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "login": "generated",
    "email": "generated",
    "role": "generated",
    "created_at": "generated",
    "failed_at": "generated",
    "failed_reason": "generated",
    "inviter": {
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
    "team_count": 10,
    "node_id": "\\"MDIyOk9yZ2FuaXphdGlvbkludml0YXRpb24x\\"",
    "invitation_teams_url": "\\"https:\\/\\/api.github.com\\/organizations\\/16\\/invitations\\/1\\/teams\\"",
    "invitation_source": "\\"member\\""
}';

    /**
     * inviter: A GitHub user.
     */
    public function __construct(public int $id, public string|null $login, public string|null $email, public string $role, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('failed_at')]
    public string|null $failedAt, #[MapFrom('failed_reason')]
    public string|null $failedReason, public Schema\SimpleUser $inviter, #[MapFrom('team_count')]
    public int $teamCount, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('invitation_teams_url')]
    public string $invitationTeamsUrl, #[MapFrom('invitation_source')]
    public string|null $invitationSource,)
    {
    }
}
