<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class PersonalAccessTokenRequest
{
    public const SCHEMA_JSON         = '{
    "title": "Personal Access Token Request",
    "required": [
        "id",
        "owner",
        "permissions_added",
        "permissions_upgraded",
        "permissions_result",
        "repository_selection",
        "repository_count",
        "repositories",
        "created_at",
        "token_expired",
        "token_expires_at",
        "token_last_used_at"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "Unique identifier of the request for access via fine-grained personal access token. Used as the `pat_request_id` parameter in the list and review API calls."
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
        "permissions_added": {
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
            "description": "New requested permissions, categorized by type of permission."
        },
        "permissions_upgraded": {
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
            "description": "Requested permissions that elevate access for a previously approved request for access, categorized by type of permission."
        },
        "permissions_result": {
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
            "description": "Permissions requested, categorized by type of permission. This field incorporates `permissions_added` and `permissions_upgraded`."
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
        "repository_count": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The number of repositories the token is requesting access to. This field is only populated when `repository_selection` is `subset`."
        },
        "repositories": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "required": [
                    "id",
                    "node_id",
                    "name",
                    "full_name",
                    "private"
                ],
                "type": "object",
                "properties": {
                    "full_name": {
                        "type": "string"
                    },
                    "id": {
                        "type": "integer",
                        "description": "Unique identifier of the repository"
                    },
                    "name": {
                        "type": "string",
                        "description": "The name of the repository."
                    },
                    "node_id": {
                        "type": "string"
                    },
                    "private": {
                        "type": "boolean",
                        "description": "Whether the repository is private or public."
                    }
                }
            },
            "description": "An array of repository objects the token is requesting access to. This field is only populated when `repository_selection` is `subset`."
        },
        "created_at": {
            "type": "string",
            "description": "Date and time when the request for access was created."
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
    "description": "Details of a Personal Access Token Request."
}';
    public const SCHEMA_TITLE        = 'Personal Access Token Request';
    public const SCHEMA_DESCRIPTION  = 'Details of a Personal Access Token Request.';
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
    "permissions_added": {
        "organization": [],
        "repository": [],
        "other": []
    },
    "permissions_upgraded": {
        "organization": [],
        "repository": [],
        "other": []
    },
    "permissions_result": {
        "organization": [],
        "repository": [],
        "other": []
    },
    "repository_selection": "subset",
    "repository_count": 16,
    "repositories": null,
    "created_at": "generated",
    "token_expired": false,
    "token_expires_at": "generated",
    "token_last_used_at": "generated"
}';

    /**
     * id: Unique identifier of the request for access via fine-grained personal access token. Used as the `pat_request_id` parameter in the list and review API calls.
     * owner: A GitHub user.
     * permissionsAdded: New requested permissions, categorized by type of permission.
     * permissionsUpgraded: Requested permissions that elevate access for a previously approved request for access, categorized by type of permission.
     * permissionsResult: Permissions requested, categorized by type of permission. This field incorporates `permissions_added` and `permissions_upgraded`.
     * repositorySelection: Type of repository selection requested.
     * repositoryCount: The number of repositories the token is requesting access to. This field is only populated when `repository_selection` is `subset`.
     * repositories: An array of repository objects the token is requesting access to. This field is only populated when `repository_selection` is `subset`.
     * createdAt: Date and time when the request for access was created.
     * tokenExpired: Whether the associated fine-grained personal access token has expired.
     * tokenExpiresAt: Date and time when the associated fine-grained personal access token expires.
     * tokenLastUsedAt: Date and time when the associated fine-grained personal access token was last used for authentication.
     */
    public function __construct(public int $id, public Schema\SimpleUser $owner, #[MapFrom('permissions_added')]
    public Schema\PersonalAccessTokenRequest\PermissionsAdded $permissionsAdded, #[MapFrom('permissions_upgraded')]
    public Schema\PersonalAccessTokenRequest\PermissionsUpgraded $permissionsUpgraded, #[MapFrom('permissions_result')]
    public Schema\PersonalAccessTokenRequest\PermissionsResult $permissionsResult, #[MapFrom('repository_selection')]
    public string $repositorySelection, #[MapFrom('repository_count')]
    public int|null $repositoryCount, public array|null $repositories, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('token_expired')]
    public bool $tokenExpired, #[MapFrom('token_expires_at')]
    public string|null $tokenExpiresAt, #[MapFrom('token_last_used_at')]
    public string|null $tokenLastUsedAt,)
    {
    }
}
