<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class PublicUser
{
    public const SCHEMA_JSON         = '{
    "title": "Public User",
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
        "bio",
        "blog",
        "company",
        "email",
        "followers",
        "following",
        "hireable",
        "location",
        "name",
        "public_gists",
        "public_repos",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "login": {
            "type": "string"
        },
        "id": {
            "type": "integer",
            "format": "int64"
        },
        "user_view_type": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "avatar_url": {
            "type": "string",
            "format": "uri"
        },
        "gravatar_id": {
            "type": [
                "string",
                "null"
            ]
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "html_url": {
            "type": "string",
            "format": "uri"
        },
        "followers_url": {
            "type": "string",
            "format": "uri"
        },
        "following_url": {
            "type": "string"
        },
        "gists_url": {
            "type": "string"
        },
        "starred_url": {
            "type": "string"
        },
        "subscriptions_url": {
            "type": "string",
            "format": "uri"
        },
        "organizations_url": {
            "type": "string",
            "format": "uri"
        },
        "repos_url": {
            "type": "string",
            "format": "uri"
        },
        "events_url": {
            "type": "string"
        },
        "received_events_url": {
            "type": "string",
            "format": "uri"
        },
        "type": {
            "type": "string"
        },
        "site_admin": {
            "type": "boolean"
        },
        "name": {
            "type": [
                "string",
                "null"
            ]
        },
        "company": {
            "type": [
                "string",
                "null"
            ]
        },
        "blog": {
            "type": [
                "string",
                "null"
            ]
        },
        "location": {
            "type": [
                "string",
                "null"
            ]
        },
        "email": {
            "type": [
                "string",
                "null"
            ],
            "format": "email"
        },
        "notification_email": {
            "type": [
                "string",
                "null"
            ],
            "format": "email"
        },
        "hireable": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "bio": {
            "type": [
                "string",
                "null"
            ]
        },
        "twitter_username": {
            "type": [
                "string",
                "null"
            ]
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
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        },
        "plan": {
            "required": [
                "collaborators",
                "name",
                "space",
                "private_repos"
            ],
            "type": "object",
            "properties": {
                "collaborators": {
                    "type": "integer"
                },
                "name": {
                    "type": "string"
                },
                "space": {
                    "type": "integer"
                },
                "private_repos": {
                    "type": "integer"
                }
            }
        },
        "private_gists": {
            "type": "integer",
            "examples": [
                1
            ]
        },
        "total_private_repos": {
            "type": "integer",
            "examples": [
                2
            ]
        },
        "owned_private_repos": {
            "type": "integer",
            "examples": [
                2
            ]
        },
        "disk_usage": {
            "type": "integer",
            "examples": [
                1
            ]
        },
        "collaborators": {
            "type": "integer",
            "examples": [
                3
            ]
        }
    },
    "description": "Public User",
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = 'Public User';
    public const SCHEMA_DESCRIPTION  = 'Public User';
    public const SCHEMA_EXAMPLE_DATA = '{
    "login": "generated",
    "id": 2,
    "user_view_type": "generated",
    "node_id": "generated",
    "avatar_url": "https:\\/\\/example.com\\/",
    "gravatar_id": "generated",
    "url": "https:\\/\\/example.com\\/",
    "html_url": "https:\\/\\/example.com\\/",
    "followers_url": "https:\\/\\/example.com\\/",
    "following_url": "generated",
    "gists_url": "generated",
    "starred_url": "generated",
    "subscriptions_url": "https:\\/\\/example.com\\/",
    "organizations_url": "https:\\/\\/example.com\\/",
    "repos_url": "https:\\/\\/example.com\\/",
    "events_url": "generated",
    "received_events_url": "https:\\/\\/example.com\\/",
    "type": "generated",
    "site_admin": false,
    "name": "generated",
    "company": "generated",
    "blog": "generated",
    "location": "generated",
    "email": "hi@example.com",
    "notification_email": "hi@example.com",
    "hireable": false,
    "bio": "generated",
    "twitter_username": "generated",
    "public_repos": 12,
    "public_gists": 12,
    "followers": 9,
    "following": 9,
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "plan": {
        "collaborators": 13,
        "name": "generated",
        "space": 5,
        "private_repos": 13
    },
    "private_gists": 1,
    "total_private_repos": 2,
    "owned_private_repos": 2,
    "disk_usage": 1,
    "collaborators": 3
}';

    public function __construct(public string $login, public int $id, #[MapFrom('user_view_type')]
    public string|null $userViewType, #[MapFrom('node_id')]
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
    public bool $siteAdmin, public string|null $name, public string|null $company, public string|null $blog, public string|null $location, public string|null $email, #[MapFrom('notification_email')]
    public string|null $notificationEmail, public bool|null $hireable, public string|null $bio, #[MapFrom('twitter_username')]
    public string|null $twitterUsername, #[MapFrom('public_repos')]
    public int $publicRepos, #[MapFrom('public_gists')]
    public int $publicGists, public int $followers, public int $following, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt, public Schema\PublicUser\Plan|null $plan, #[MapFrom('private_gists')]
    public int|null $privateGists, #[MapFrom('total_private_repos')]
    public int|null $totalPrivateRepos, #[MapFrom('owned_private_repos')]
    public int|null $ownedPrivateRepos, #[MapFrom('disk_usage')]
    public int|null $diskUsage, public int|null $collaborators,)
    {
    }
}
