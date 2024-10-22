<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Collaborator
{
    public const SCHEMA_JSON         = '{
    "title": "Collaborator",
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
        "url",
        "role_name"
    ],
    "type": "object",
    "properties": {
        "login": {
            "type": "string",
            "examples": [
                "octocat"
            ]
        },
        "id": {
            "type": "integer",
            "format": "int64",
            "examples": [
                1
            ]
        },
        "email": {
            "type": [
                "string",
                "null"
            ]
        },
        "name": {
            "type": [
                "string",
                "null"
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
        "permissions": {
            "required": [
                "pull",
                "push",
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
        "role_name": {
            "type": "string",
            "examples": [
                "admin"
            ]
        },
        "user_view_type": {
            "type": "string",
            "examples": [
                "public"
            ]
        }
    },
    "description": "Collaborator"
}';
    public const SCHEMA_TITLE        = 'Collaborator';
    public const SCHEMA_DESCRIPTION  = 'Collaborator';
    public const SCHEMA_EXAMPLE_DATA = '{
    "login": "octocat",
    "id": 1,
    "email": "generated",
    "name": "generated",
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
    "permissions": {
        "pull": false,
        "triage": false,
        "push": false,
        "maintain": false,
        "admin": false
    },
    "role_name": "admin",
    "user_view_type": "public"
}';

    public function __construct(public string $login, public int $id, public string|null $email, public string|null $name, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('avatar_url')]
    public string $avatarUrl, #[MapFrom('gravatar_id')]
    public string|null $gravatarId, public string $url, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('followers_url')]
    public string $followersUrl, #[MapFrom('following_url')]
    public string $followingUrl, #[MapFrom('gists_url')]
    public string $gistsUrl, #[MapFrom('starred_url')]
    public string $starredUrl, #[MapFrom('subscriptions_url')]
    public string $subscriptionsUrl, #[MapFrom('organizations_url')]
    public string $organizationsUrl, #[MapFrom('repos_url')]
    public string $reposUrl, #[MapFrom('events_url')]
    public string $eventsUrl, #[MapFrom('received_events_url')]
    public string $receivedEventsUrl, public string $type, #[MapFrom('site_admin')]
    public bool $siteAdmin, public Schema\Collaborator\Permissions|null $permissions, #[MapFrom('role_name')]
    public string $roleName, #[MapFrom('user_view_type')]
    public string|null $userViewType,)
    {
    }
}
