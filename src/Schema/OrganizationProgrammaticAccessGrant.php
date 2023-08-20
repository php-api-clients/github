<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class OrganizationProgrammaticAccessGrant
{
    public const SCHEMA_JSON         = '{
    "title": "Organization Programmatic Access Grant",
    "required": [
        "id",
        "owner",
        "repository_selection",
        "repositories_url",
        "permissions",
        "access_granted_at",
        "token_expired",
        "token_expires_at",
        "token_last_used_at"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "Unique identifier of the fine-grained personal access token. The `pat_id` used to get details about an approved fine-grained personal access token."
        },
        "owner": {
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
        "repository_selection": {
            "enum": [
                "none",
                "all",
                "subset"
            ],
            "type": "string",
            "description": "Type of repository selection requested."
        },
        "repositories_url": {
            "type": "string",
            "description": "URL to the list of repositories the fine-grained personal access token can access. Only follow when `repository_selection` is `subset`."
        },
        "permissions": {
            "type": "object",
            "properties": {
                "organization": {
                    "type": "object",
                    "additionalProperties": {
                        "type": "string"
                    }
                },
                "repository": {
                    "type": "object",
                    "additionalProperties": {
                        "type": "string"
                    }
                },
                "other": {
                    "type": "object",
                    "additionalProperties": {
                        "type": "string"
                    }
                }
            },
            "description": "Permissions requested, categorized by type of permission."
        },
        "access_granted_at": {
            "type": "string",
            "description": "Date and time when the fine-grained personal access token was approved to access the organization."
        },
        "token_expired": {
            "type": "boolean",
            "description": "Whether the associated fine-grained personal access token has expired."
        },
        "token_expires_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "Date and time when the associated fine-grained personal access token expires."
        },
        "token_last_used_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "Date and time when the associated fine-grained personal access token was last used for authentication."
        }
    },
    "description": "Minimal representation of an organization programmatic access grant for enumerations"
}';
    public const SCHEMA_TITLE        = 'Organization Programmatic Access Grant';
    public const SCHEMA_DESCRIPTION  = 'Minimal representation of an organization programmatic access grant for enumerations';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "owner": {
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
    "repository_selection": "subset",
    "repositories_url": "generated",
    "permissions": {
        "organization": [],
        "repository": [],
        "other": []
    },
    "access_granted_at": "generated",
    "token_expired": false,
    "token_expires_at": "generated",
    "token_last_used_at": "generated"
}';

    /**
     * id: Unique identifier of the fine-grained personal access token. The `pat_id` used to get details about an approved fine-grained personal access token.
     * owner: A GitHub user.
     * repositorySelection: Type of repository selection requested.
     * repositoriesUrl: URL to the list of repositories the fine-grained personal access token can access. Only follow when `repository_selection` is `subset`.
     * permissions: Permissions requested, categorized by type of permission.
     * accessGrantedAt: Date and time when the fine-grained personal access token was approved to access the organization.
     * tokenExpired: Whether the associated fine-grained personal access token has expired.
     * tokenExpiresAt: Date and time when the associated fine-grained personal access token expires.
     * tokenLastUsedAt: Date and time when the associated fine-grained personal access token was last used for authentication.
     */
    public function __construct(public int $id, public Schema\SimpleUser $owner, #[MapFrom('repository_selection')]
    public string $repositorySelection, #[MapFrom('repositories_url')]
    public string $repositoriesUrl, public Schema\OrganizationProgrammaticAccessGrant\Permissions $permissions, #[MapFrom('access_granted_at')]
    public string $accessGrantedAt, #[MapFrom('token_expired')]
    public bool $tokenExpired, #[MapFrom('token_expires_at')]
    public string|null $tokenExpiresAt, #[MapFrom('token_last_used_at')]
    public string|null $tokenLastUsedAt,)
    {
    }
}
