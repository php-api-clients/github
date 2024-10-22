<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class PrivateUser
{
    public const SCHEMA_JSON         = '{
    "title": "Private User",
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
        "updated_at",
        "collaborators",
        "disk_usage",
        "owned_private_repos",
        "private_gists",
        "total_private_repos",
        "two_factor_authentication"
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
        "user_view_type": {
            "type": "string"
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
        "name": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "monalisa octocat"
            ]
        },
        "company": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "GitHub"
            ]
        },
        "blog": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "https:\\/\\/github.com\\/blog"
            ]
        },
        "location": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "San Francisco"
            ]
        },
        "email": {
            "type": [
                "string",
                "null"
            ],
            "format": "email",
            "examples": [
                "octocat@github.com"
            ]
        },
        "notification_email": {
            "type": [
                "string",
                "null"
            ],
            "format": "email",
            "examples": [
                "octocat@github.com"
            ]
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
            ],
            "examples": [
                "There once was..."
            ]
        },
        "twitter_username": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "monalisa"
            ]
        },
        "public_repos": {
            "type": "integer",
            "examples": [
                2
            ]
        },
        "public_gists": {
            "type": "integer",
            "examples": [
                1
            ]
        },
        "followers": {
            "type": "integer",
            "examples": [
                20
            ]
        },
        "following": {
            "type": "integer",
            "examples": [
                0
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2008-01-14T04:33:35Z"
            ]
        },
        "updated_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2008-01-14T04:33:35Z"
            ]
        },
        "private_gists": {
            "type": "integer",
            "examples": [
                81
            ]
        },
        "total_private_repos": {
            "type": "integer",
            "examples": [
                100
            ]
        },
        "owned_private_repos": {
            "type": "integer",
            "examples": [
                100
            ]
        },
        "disk_usage": {
            "type": "integer",
            "examples": [
                10000
            ]
        },
        "collaborators": {
            "type": "integer",
            "examples": [
                8
            ]
        },
        "two_factor_authentication": {
            "type": "boolean",
            "examples": [
                true
            ]
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
        "business_plus": {
            "type": "boolean"
        },
        "ldap_dn": {
            "type": "string"
        }
    },
    "description": "Private User"
}';
    public const SCHEMA_TITLE        = 'Private User';
    public const SCHEMA_DESCRIPTION  = 'Private User';
    public const SCHEMA_EXAMPLE_DATA = '{
    "login": "octocat",
    "id": 1,
    "user_view_type": "generated",
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
    "name": "monalisa octocat",
    "company": "GitHub",
    "blog": "https:\\/\\/github.com\\/blog",
    "location": "San Francisco",
    "email": "octocat@github.com",
    "notification_email": "octocat@github.com",
    "hireable": false,
    "bio": "There once was...",
    "twitter_username": "monalisa",
    "public_repos": 2,
    "public_gists": 1,
    "followers": 20,
    "following": 0,
    "created_at": "2008-01-14T04:33:35Z",
    "updated_at": "2008-01-14T04:33:35Z",
    "private_gists": 81,
    "total_private_repos": 100,
    "owned_private_repos": 100,
    "disk_usage": 10000,
    "collaborators": 8,
    "two_factor_authentication": true,
    "plan": {
        "collaborators": 13,
        "name": "generated",
        "space": 5,
        "private_repos": 13
    },
    "business_plus": false,
    "ldap_dn": "generated"
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
    public string $updatedAt, #[MapFrom('private_gists')]
    public int $privateGists, #[MapFrom('total_private_repos')]
    public int $totalPrivateRepos, #[MapFrom('owned_private_repos')]
    public int $ownedPrivateRepos, #[MapFrom('disk_usage')]
    public int $diskUsage, public int $collaborators, #[MapFrom('two_factor_authentication')]
    public bool $twoFactorAuthentication, public Schema\PrivateUser\Plan|null $plan, #[MapFrom('business_plus')]
    public bool|null $businessPlus, #[MapFrom('ldap_dn')]
    public string|null $ldapDn,)
    {
    }
}
