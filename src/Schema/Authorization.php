<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Authorization
{
    public const SCHEMA_JSON         = '{
    "title": "Authorization",
    "required": [
        "app",
        "id",
        "note",
        "note_url",
        "scopes",
        "token",
        "hashed_token",
        "token_last_eight",
        "fingerprint",
        "url",
        "created_at",
        "updated_at",
        "expires_at"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "format": "int64"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "scopes": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "type": "string"
            },
            "description": "A list of scopes that this authorization is in."
        },
        "token": {
            "type": "string"
        },
        "token_last_eight": {
            "type": [
                "string",
                "null"
            ]
        },
        "hashed_token": {
            "type": [
                "string",
                "null"
            ]
        },
        "app": {
            "required": [
                "client_id",
                "name",
                "url"
            ],
            "type": "object",
            "properties": {
                "client_id": {
                    "type": "string"
                },
                "name": {
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        },
        "note": {
            "type": [
                "string",
                "null"
            ]
        },
        "note_url": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "fingerprint": {
            "type": [
                "string",
                "null"
            ]
        },
        "user": {
            "anyOf": [
                {
                    "type": "null"
                },
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
                            "format": "int64",
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
                        },
                        "user_view_type": {
                            "type": "string",
                            "examples": [
                                "public"
                            ]
                        }
                    },
                    "description": "A GitHub user."
                }
            ]
        },
        "installation": {
            "anyOf": [
                {
                    "type": "null"
                },
                {
                    "title": "Scoped Installation",
                    "required": [
                        "permissions",
                        "repository_selection",
                        "single_file_name",
                        "repositories_url",
                        "account"
                    ],
                    "type": "object",
                    "properties": {
                        "permissions": {
                            "title": "App Permissions",
                            "type": "object",
                            "properties": {
                                "actions": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts."
                                },
                                "administration": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation."
                                },
                                "checks": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for checks on code."
                                },
                                "codespaces": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to create, edit, delete, and list Codespaces."
                                },
                                "contents": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges."
                                },
                                "dependabot_secrets": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The leve of permission to grant the access token to manage Dependabot secrets."
                                },
                                "deployments": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for deployments and deployment statuses."
                                },
                                "environments": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for managing repository environments."
                                },
                                "issues": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones."
                                },
                                "metadata": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata."
                                },
                                "packages": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for packages published to GitHub Packages."
                                },
                                "pages": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds."
                                },
                                "pull_requests": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges."
                                },
                                "repository_custom_properties": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to view and edit custom properties for a repository, when allowed by the property."
                                },
                                "repository_hooks": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage the post-receive hooks for a repository."
                                },
                                "repository_projects": {
                                    "enum": [
                                        "read",
                                        "write",
                                        "admin"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage repository projects, columns, and cards."
                                },
                                "secret_scanning_alerts": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to view and manage secret scanning alerts."
                                },
                                "secrets": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage repository secrets."
                                },
                                "security_events": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to view and manage security events like code scanning alerts."
                                },
                                "single_file": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage just a single file."
                                },
                                "statuses": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for commit statuses."
                                },
                                "vulnerability_alerts": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage Dependabot alerts."
                                },
                                "workflows": {
                                    "enum": [
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to update GitHub Actions workflow files."
                                },
                                "members": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for organization teams and members."
                                },
                                "organization_administration": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage access to an organization."
                                },
                                "organization_custom_roles": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for custom repository roles management."
                                },
                                "organization_custom_org_roles": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for custom organization roles management."
                                },
                                "organization_custom_properties": {
                                    "enum": [
                                        "read",
                                        "write",
                                        "admin"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for custom property management."
                                },
                                "organization_copilot_seat_management": {
                                    "enum": [
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for managing access to GitHub Copilot for members of an organization with a Copilot Business subscription. This property is in public preview and is subject to change."
                                },
                                "organization_announcement_banners": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to view and manage announcement banners for an organization."
                                },
                                "organization_events": {
                                    "enum": [
                                        "read"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to view events triggered by an activity in an organization."
                                },
                                "organization_hooks": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage the post-receive hooks for an organization."
                                },
                                "organization_personal_access_tokens": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for viewing and managing fine-grained personal access token requests to an organization."
                                },
                                "organization_personal_access_token_requests": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for viewing and managing fine-grained personal access tokens that have been approved by an organization."
                                },
                                "organization_plan": {
                                    "enum": [
                                        "read"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for viewing an organization\'s plan."
                                },
                                "organization_projects": {
                                    "enum": [
                                        "read",
                                        "write",
                                        "admin"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage organization projects and projects public preview (where available)."
                                },
                                "organization_packages": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token for organization packages published to GitHub Packages."
                                },
                                "organization_secrets": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage organization secrets."
                                },
                                "organization_self_hosted_runners": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization."
                                },
                                "organization_user_blocking": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to view and manage users blocked by the organization."
                                },
                                "team_discussions": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage team discussions and related comments."
                                },
                                "email_addresses": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage the email addresses belonging to a user."
                                },
                                "followers": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage the followers belonging to a user."
                                },
                                "git_ssh_keys": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage git SSH keys."
                                },
                                "gpg_keys": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to view and manage GPG keys belonging to a user."
                                },
                                "interaction_limits": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to view and manage interaction limits on a repository."
                                },
                                "profile": {
                                    "enum": [
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to manage the profile settings belonging to a user."
                                },
                                "starring": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string",
                                    "description": "The level of permission to grant the access token to list and manage repositories a user is starring."
                                }
                            },
                            "description": "The permissions granted to the user access token.",
                            "example": {
                                "contents": "read",
                                "issues": "read",
                                "deployments": "write",
                                "single_file": "read"
                            }
                        },
                        "repository_selection": {
                            "enum": [
                                "all",
                                "selected"
                            ],
                            "type": "string",
                            "description": "Describe whether all repositories have been selected or there\'s a selection involved"
                        },
                        "single_file_name": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "examples": [
                                "config.yaml"
                            ]
                        },
                        "has_multiple_single_files": {
                            "type": "boolean",
                            "examples": [
                                true
                            ]
                        },
                        "single_file_paths": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "examples": [
                                "config.yml",
                                ".github\\/issue_TEMPLATE.md"
                            ]
                        },
                        "repositories_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/repos"
                            ]
                        },
                        "account": {
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
                                    "format": "int64",
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
                                },
                                "user_view_type": {
                                    "type": "string",
                                    "examples": [
                                        "public"
                                    ]
                                }
                            },
                            "description": "A GitHub user."
                        }
                    }
                }
            ]
        },
        "expires_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time"
        }
    },
    "description": "The authorization for an OAuth app, GitHub App, or a Personal Access Token."
}';
    public const SCHEMA_TITLE        = 'Authorization';
    public const SCHEMA_DESCRIPTION  = 'The authorization for an OAuth app, GitHub App, or a Personal Access Token.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "url": "https:\\/\\/example.com\\/",
    "scopes": null,
    "token": "generated",
    "token_last_eight": "generated",
    "hashed_token": "generated",
    "app": {
        "client_id": "generated",
        "name": "generated",
        "url": "https:\\/\\/example.com\\/"
    },
    "note": "generated",
    "note_url": "https:\\/\\/example.com\\/",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "created_at": "1970-01-01T00:00:00+00:00",
    "fingerprint": "generated",
    "user": {
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
        "starred_at": "\\"2020-07-09T00:17:55Z\\"",
        "user_view_type": "public"
    },
    "installation": {
        "permissions": {
            "actions": "read",
            "administration": "write",
            "checks": "write",
            "codespaces": "write",
            "contents": "read",
            "dependabot_secrets": "write",
            "deployments": "write",
            "environments": "write",
            "issues": "read",
            "metadata": "write",
            "packages": "write",
            "pages": "read",
            "pull_requests": "read",
            "repository_custom_properties": "write",
            "repository_hooks": "write",
            "repository_projects": "read",
            "secret_scanning_alerts": "write",
            "secrets": "read",
            "security_events": "read",
            "single_file": "read",
            "statuses": "write",
            "vulnerability_alerts": "write",
            "workflows": "write",
            "members": "read",
            "organization_administration": "read",
            "organization_custom_roles": "read",
            "organization_custom_org_roles": "read",
            "organization_custom_properties": "admin",
            "organization_copilot_seat_management": "write",
            "organization_announcement_banners": "read",
            "organization_events": "read",
            "organization_hooks": "write",
            "organization_personal_access_tokens": "read",
            "organization_personal_access_token_requests": "read",
            "organization_plan": "read",
            "organization_projects": "read",
            "organization_packages": "read",
            "organization_secrets": "write",
            "organization_self_hosted_runners": "write",
            "organization_user_blocking": "write",
            "team_discussions": "write",
            "email_addresses": "read",
            "followers": "read",
            "git_ssh_keys": "write",
            "gpg_keys": "write",
            "interaction_limits": "write",
            "profile": "write",
            "starring": "write"
        },
        "repository_selection": "selected",
        "single_file_name": "config.yaml",
        "has_multiple_single_files": true,
        "single_file_paths": [
            "config.yml",
            "config.yml"
        ],
        "repositories_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
        "account": {
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
            "starred_at": "\\"2020-07-09T00:17:55Z\\"",
            "user_view_type": "public"
        }
    },
    "expires_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * scopes: A list of scopes that this authorization is in.
     */
    public function __construct(public int $id, public string $url, public array|null $scopes, public string $token, #[MapFrom('token_last_eight')]
    public string|null $tokenLastEight, #[MapFrom('hashed_token')]
    public string|null $hashedToken, public Schema\Authorization\App $app, public string|null $note, #[MapFrom('note_url')]
    public string|null $noteUrl, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('created_at')]
    public string $createdAt, public string|null $fingerprint, public Schema\SimpleUser|null $user, public Schema\ScopedInstallation|null $installation, #[MapFrom('expires_at')]
    public string|null $expiresAt,)
    {
    }
}
