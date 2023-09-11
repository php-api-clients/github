<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class WebhookTeamDeleted
{
    public const SCHEMA_JSON         = '{
    "title": "team deleted event",
    "required": [
        "action",
        "team",
        "organization"
    ],
    "type": "object",
    "properties": {
        "action": {
            "enum": [
                "deleted"
            ],
            "type": "string"
        },
        "enterprise": {
            "title": "Enterprise",
            "required": [
                "id",
                "node_id",
                "name",
                "slug",
                "html_url",
                "created_at",
                "updated_at",
                "avatar_url"
            ],
            "type": "object",
            "properties": {
                "description": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "A short description of the enterprise."
                },
                "html_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/github.com\\/enterprises\\/octo-business"
                    ]
                },
                "website_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The enterprise\'s website URL.",
                    "format": "uri"
                },
                "id": {
                    "type": "integer",
                    "description": "Unique identifier of the enterprise",
                    "examples": [
                        42
                    ]
                },
                "node_id": {
                    "type": "string",
                    "examples": [
                        "MDEwOlJlcG9zaXRvcnkxMjk2MjY5"
                    ]
                },
                "name": {
                    "type": "string",
                    "description": "The name of the enterprise.",
                    "examples": [
                        "Octo Business"
                    ]
                },
                "slug": {
                    "type": "string",
                    "description": "The slug url identifier for the enterprise.",
                    "examples": [
                        "octo-business"
                    ]
                },
                "created_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time",
                    "examples": [
                        "2019-01-26T19:01:12Z"
                    ]
                },
                "updated_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time",
                    "examples": [
                        "2019-01-26T19:14:43Z"
                    ]
                },
                "avatar_url": {
                    "type": "string",
                    "format": "uri"
                }
            },
            "description": "An enterprise on GitHub."
        },
        "installation": {
            "title": "Simple Installation",
            "required": [
                "id",
                "node_id"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "description": "The ID of the installation.",
                    "examples": [
                        1
                    ]
                },
                "node_id": {
                    "type": "string",
                    "description": "The global node ID of the installation.",
                    "examples": [
                        "MDQ6VXNlcjU4MzIzMQ=="
                    ]
                }
            },
            "description": "The GitHub App installation. Webhook payloads contain the `installation` property when the event is configured\\nfor and sent to a GitHub App. For more information,\\nsee \\"[Using webhooks with GitHub Apps](https:\\/\\/docs.github.com\\/apps\\/creating-github-apps\\/registering-a-github-app\\/using-webhooks-with-github-apps).\\""
        },
        "organization": {
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
            "description": "A GitHub organization. Webhook payloads contain the `organization` property when the webhook is configured for an\\norganization, or when the event occurs from activity in a repository owned by an organization."
        },
        "repository": {
            "title": "Repository",
            "required": [
                "id",
                "node_id",
                "name",
                "full_name",
                "private",
                "owner",
                "html_url",
                "description",
                "fork",
                "url",
                "forks_url",
                "keys_url",
                "collaborators_url",
                "teams_url",
                "hooks_url",
                "issue_events_url",
                "events_url",
                "assignees_url",
                "branches_url",
                "tags_url",
                "blobs_url",
                "git_tags_url",
                "git_refs_url",
                "trees_url",
                "statuses_url",
                "languages_url",
                "stargazers_url",
                "contributors_url",
                "subscribers_url",
                "subscription_url",
                "commits_url",
                "git_commits_url",
                "comments_url",
                "issue_comment_url",
                "contents_url",
                "compare_url",
                "merges_url",
                "archive_url",
                "downloads_url",
                "issues_url",
                "pulls_url",
                "milestones_url",
                "notifications_url",
                "labels_url",
                "releases_url",
                "deployments_url",
                "created_at",
                "updated_at",
                "pushed_at",
                "git_url",
                "ssh_url",
                "clone_url",
                "svn_url",
                "homepage",
                "size",
                "stargazers_count",
                "watchers_count",
                "language",
                "has_issues",
                "has_projects",
                "has_downloads",
                "has_wiki",
                "has_pages",
                "forks_count",
                "mirror_url",
                "archived",
                "open_issues_count",
                "license",
                "forks",
                "open_issues",
                "watchers",
                "default_branch",
                "topics",
                "visibility"
            ],
            "type": "object",
            "properties": {
                "allow_auto_merge": {
                    "type": "boolean",
                    "description": "Whether to allow auto-merge for pull requests.",
                    "default": false
                },
                "allow_forking": {
                    "type": "boolean",
                    "description": "Whether to allow private forks"
                },
                "allow_merge_commit": {
                    "type": "boolean",
                    "description": "Whether to allow merge commits for pull requests.",
                    "default": true
                },
                "allow_rebase_merge": {
                    "type": "boolean",
                    "description": "Whether to allow rebase merges for pull requests.",
                    "default": true
                },
                "allow_squash_merge": {
                    "type": "boolean",
                    "description": "Whether to allow squash merges for pull requests.",
                    "default": true
                },
                "allow_update_branch": {
                    "type": "boolean"
                },
                "archive_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "archived": {
                    "type": "boolean",
                    "description": "Whether the repository is archived.",
                    "default": false
                },
                "assignees_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "blobs_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "branches_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "clone_url": {
                    "type": "string",
                    "format": "uri"
                },
                "collaborators_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "comments_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "commits_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "compare_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "contents_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "contributors_url": {
                    "type": "string",
                    "format": "uri"
                },
                "created_at": {
                    "oneOf": [
                        {
                            "type": "integer"
                        },
                        {
                            "type": "string",
                            "format": "date-time"
                        }
                    ]
                },
                "default_branch": {
                    "type": "string",
                    "description": "The default branch of the repository."
                },
                "delete_branch_on_merge": {
                    "type": "boolean",
                    "description": "Whether to delete head branches when pull requests are merged",
                    "default": false
                },
                "deployments_url": {
                    "type": "string",
                    "format": "uri"
                },
                "description": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "disabled": {
                    "type": "boolean",
                    "description": "Returns whether or not this repository is disabled."
                },
                "downloads_url": {
                    "type": "string",
                    "format": "uri"
                },
                "events_url": {
                    "type": "string",
                    "format": "uri"
                },
                "fork": {
                    "type": "boolean"
                },
                "forks": {
                    "type": "integer"
                },
                "forks_count": {
                    "type": "integer"
                },
                "forks_url": {
                    "type": "string",
                    "format": "uri"
                },
                "full_name": {
                    "type": "string"
                },
                "git_commits_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "git_refs_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "git_tags_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "git_url": {
                    "type": "string",
                    "format": "uri"
                },
                "has_downloads": {
                    "type": "boolean",
                    "description": "Whether downloads are enabled.",
                    "default": true
                },
                "has_issues": {
                    "type": "boolean",
                    "description": "Whether issues are enabled.",
                    "default": true
                },
                "has_pages": {
                    "type": "boolean"
                },
                "has_projects": {
                    "type": "boolean",
                    "description": "Whether projects are enabled.",
                    "default": true
                },
                "has_wiki": {
                    "type": "boolean",
                    "description": "Whether the wiki is enabled.",
                    "default": true
                },
                "homepage": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "hooks_url": {
                    "type": "string",
                    "format": "uri"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": "integer",
                    "description": "Unique identifier of the repository"
                },
                "is_template": {
                    "type": "boolean"
                },
                "issue_comment_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "issue_events_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "issues_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "keys_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "labels_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "language": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "languages_url": {
                    "type": "string",
                    "format": "uri"
                },
                "license": {
                    "title": "License",
                    "required": [
                        "key",
                        "name",
                        "spdx_id",
                        "url",
                        "node_id"
                    ],
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "key": {
                            "type": "string"
                        },
                        "name": {
                            "type": "string"
                        },
                        "node_id": {
                            "type": "string"
                        },
                        "spdx_id": {
                            "type": "string"
                        },
                        "url": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri"
                        }
                    }
                },
                "master_branch": {
                    "type": "string"
                },
                "merges_url": {
                    "type": "string",
                    "format": "uri"
                },
                "milestones_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "mirror_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "name": {
                    "type": "string",
                    "description": "The name of the repository."
                },
                "node_id": {
                    "type": "string"
                },
                "notifications_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "open_issues": {
                    "type": "integer"
                },
                "open_issues_count": {
                    "type": "integer"
                },
                "organization": {
                    "type": "string"
                },
                "owner": {
                    "title": "User",
                    "required": [
                        "login",
                        "id"
                    ],
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "avatar_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "deleted": {
                            "type": "boolean"
                        },
                        "email": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "events_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "followers_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "following_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "gists_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "gravatar_id": {
                            "type": "string"
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "id": {
                            "type": "integer"
                        },
                        "login": {
                            "type": "string"
                        },
                        "name": {
                            "type": "string"
                        },
                        "node_id": {
                            "type": "string"
                        },
                        "organizations_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "received_events_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "repos_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "site_admin": {
                            "type": "boolean"
                        },
                        "starred_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "subscriptions_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "type": {
                            "enum": [
                                "Bot",
                                "User",
                                "Organization"
                            ],
                            "type": "string"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        }
                    }
                },
                "permissions": {
                    "required": [
                        "pull",
                        "push",
                        "admin"
                    ],
                    "type": "object",
                    "properties": {
                        "admin": {
                            "type": "boolean"
                        },
                        "maintain": {
                            "type": "boolean"
                        },
                        "pull": {
                            "type": "boolean"
                        },
                        "push": {
                            "type": "boolean"
                        },
                        "triage": {
                            "type": "boolean"
                        }
                    }
                },
                "private": {
                    "type": "boolean",
                    "description": "Whether the repository is private or public."
                },
                "public": {
                    "type": "boolean"
                },
                "pulls_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "pushed_at": {
                    "type": [
                        "null",
                        "integer",
                        "string"
                    ],
                    "oneOf": [
                        {
                            "type": "integer"
                        },
                        {
                            "type": "string",
                            "format": "date-time"
                        }
                    ]
                },
                "releases_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "role_name": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "size": {
                    "type": "integer"
                },
                "ssh_url": {
                    "type": "string"
                },
                "stargazers": {
                    "type": "integer"
                },
                "stargazers_count": {
                    "type": "integer"
                },
                "stargazers_url": {
                    "type": "string",
                    "format": "uri"
                },
                "statuses_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "subscribers_url": {
                    "type": "string",
                    "format": "uri"
                },
                "subscription_url": {
                    "type": "string",
                    "format": "uri"
                },
                "svn_url": {
                    "type": "string",
                    "format": "uri"
                },
                "tags_url": {
                    "type": "string",
                    "format": "uri"
                },
                "teams_url": {
                    "type": "string",
                    "format": "uri"
                },
                "topics": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    }
                },
                "trees_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "updated_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "visibility": {
                    "enum": [
                        "public",
                        "private",
                        "internal"
                    ],
                    "type": "string"
                },
                "watchers": {
                    "type": "integer"
                },
                "watchers_count": {
                    "type": "integer"
                }
            },
            "description": "A git repository"
        },
        "sender": {
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
            "description": "The GitHub user that triggered the event. This property is included in every webhook payload."
        },
        "team": {
            "title": "Team",
            "required": [
                "name",
                "id"
            ],
            "type": "object",
            "properties": {
                "deleted": {
                    "type": "boolean"
                },
                "description": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "Description of the team"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": "integer",
                    "description": "Unique identifier of the team"
                },
                "members_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "name": {
                    "type": "string",
                    "description": "Name of the team"
                },
                "node_id": {
                    "type": "string"
                },
                "parent": {
                    "required": [
                        "name",
                        "id",
                        "node_id",
                        "slug",
                        "description",
                        "privacy",
                        "notification_setting",
                        "url",
                        "html_url",
                        "members_url",
                        "repositories_url",
                        "permission"
                    ],
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "description": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "Description of the team"
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "id": {
                            "type": "integer",
                            "description": "Unique identifier of the team"
                        },
                        "members_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "name": {
                            "type": "string",
                            "description": "Name of the team"
                        },
                        "node_id": {
                            "type": "string"
                        },
                        "permission": {
                            "type": "string",
                            "description": "Permission that the team will have for its repositories"
                        },
                        "privacy": {
                            "enum": [
                                "open",
                                "closed",
                                "secret"
                            ],
                            "type": "string"
                        },
                        "notification_setting": {
                            "enum": [
                                "notifications_enabled",
                                "notifications_disabled"
                            ],
                            "type": "string",
                            "description": "Whether team members will receive notifications when their team is @mentioned"
                        },
                        "repositories_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "slug": {
                            "type": "string"
                        },
                        "url": {
                            "type": "string",
                            "description": "URL for the team",
                            "format": "uri"
                        }
                    }
                },
                "permission": {
                    "type": "string",
                    "description": "Permission that the team will have for its repositories"
                },
                "privacy": {
                    "enum": [
                        "open",
                        "closed",
                        "secret"
                    ],
                    "type": "string"
                },
                "notification_setting": {
                    "enum": [
                        "notifications_enabled",
                        "notifications_disabled"
                    ],
                    "type": "string",
                    "description": "Whether team members will receive notifications when their team is @mentioned"
                },
                "repositories_url": {
                    "type": "string",
                    "format": "uri"
                },
                "slug": {
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "description": "URL for the team",
                    "format": "uri"
                }
            },
            "description": "Groups of organization members that gives permissions on specified repositories."
        }
    }
}';
    public const SCHEMA_TITLE        = 'team deleted event';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "action": "deleted",
    "enterprise": {
        "description": "generated",
        "html_url": "https:\\/\\/github.com\\/enterprises\\/octo-business",
        "website_url": "https:\\/\\/example.com\\/",
        "id": 42,
        "node_id": "MDEwOlJlcG9zaXRvcnkxMjk2MjY5",
        "name": "Octo Business",
        "slug": "octo-business",
        "created_at": "2019-01-26T19:01:12Z",
        "updated_at": "2019-01-26T19:14:43Z",
        "avatar_url": "https:\\/\\/example.com\\/"
    },
    "installation": {
        "id": 1,
        "node_id": "MDQ6VXNlcjU4MzIzMQ=="
    },
    "organization": {
        "login": "github",
        "id": 1,
        "node_id": "MDEyOk9yZ2FuaXphdGlvbjE=",
        "url": "https:\\/\\/api.github.com\\/orgs\\/github",
        "repos_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/repos",
        "events_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/events",
        "hooks_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/hooks",
        "issues_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/issues",
        "members_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}",
        "public_members_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}",
        "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
        "description": "A great organization"
    },
    "repository": {
        "allow_auto_merge": false,
        "allow_forking": false,
        "allow_merge_commit": false,
        "allow_rebase_merge": false,
        "allow_squash_merge": false,
        "allow_update_branch": false,
        "archive_url": "generated",
        "archived": false,
        "assignees_url": "generated",
        "blobs_url": "generated",
        "branches_url": "generated",
        "clone_url": "https:\\/\\/example.com\\/",
        "collaborators_url": "generated",
        "comments_url": "generated",
        "commits_url": "generated",
        "compare_url": "generated",
        "contents_url": "generated",
        "contributors_url": "https:\\/\\/example.com\\/",
        "created_at": null,
        "default_branch": "generated",
        "delete_branch_on_merge": false,
        "deployments_url": "https:\\/\\/example.com\\/",
        "description": "generated",
        "disabled": false,
        "downloads_url": "https:\\/\\/example.com\\/",
        "events_url": "https:\\/\\/example.com\\/",
        "fork": false,
        "forks": 5,
        "forks_count": 11,
        "forks_url": "https:\\/\\/example.com\\/",
        "full_name": "generated",
        "git_commits_url": "generated",
        "git_refs_url": "generated",
        "git_tags_url": "generated",
        "git_url": "https:\\/\\/example.com\\/",
        "has_downloads": false,
        "has_issues": false,
        "has_pages": false,
        "has_projects": false,
        "has_wiki": false,
        "homepage": "generated",
        "hooks_url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "is_template": false,
        "issue_comment_url": "generated",
        "issue_events_url": "generated",
        "issues_url": "generated",
        "keys_url": "generated",
        "labels_url": "generated",
        "language": "generated",
        "languages_url": "https:\\/\\/example.com\\/",
        "license": {
            "key": "generated",
            "name": "generated",
            "node_id": "generated",
            "spdx_id": "generated",
            "url": "https:\\/\\/example.com\\/"
        },
        "master_branch": "generated",
        "merges_url": "https:\\/\\/example.com\\/",
        "milestones_url": "generated",
        "mirror_url": "https:\\/\\/example.com\\/",
        "name": "generated",
        "node_id": "generated",
        "notifications_url": "generated",
        "open_issues": 11,
        "open_issues_count": 17,
        "organization": "generated",
        "owner": {
            "avatar_url": "https:\\/\\/example.com\\/",
            "deleted": false,
            "email": "generated",
            "events_url": "generated",
            "followers_url": "https:\\/\\/example.com\\/",
            "following_url": "generated",
            "gists_url": "generated",
            "gravatar_id": "generated",
            "html_url": "https:\\/\\/example.com\\/",
            "id": 2,
            "login": "generated",
            "name": "generated",
            "node_id": "generated",
            "organizations_url": "https:\\/\\/example.com\\/",
            "received_events_url": "https:\\/\\/example.com\\/",
            "repos_url": "https:\\/\\/example.com\\/",
            "site_admin": false,
            "starred_url": "generated",
            "subscriptions_url": "https:\\/\\/example.com\\/",
            "type": "Organization",
            "url": "https:\\/\\/example.com\\/"
        },
        "permissions": {
            "admin": false,
            "maintain": false,
            "pull": false,
            "push": false,
            "triage": false
        },
        "private": false,
        "public": false,
        "pulls_url": "generated",
        "pushed_at": null,
        "releases_url": "generated",
        "role_name": "generated",
        "size": 4,
        "ssh_url": "generated",
        "stargazers": 10,
        "stargazers_count": 16,
        "stargazers_url": "https:\\/\\/example.com\\/",
        "statuses_url": "generated",
        "subscribers_url": "https:\\/\\/example.com\\/",
        "subscription_url": "https:\\/\\/example.com\\/",
        "svn_url": "https:\\/\\/example.com\\/",
        "tags_url": "https:\\/\\/example.com\\/",
        "teams_url": "https:\\/\\/example.com\\/",
        "topics": [
            "generated",
            "generated"
        ],
        "trees_url": "generated",
        "updated_at": "1970-01-01T00:00:00+00:00",
        "url": "https:\\/\\/example.com\\/",
        "visibility": "internal",
        "watchers": 8,
        "watchers_count": 14
    },
    "sender": {
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
    "team": {
        "deleted": false,
        "description": "generated",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "members_url": "generated",
        "name": "generated",
        "node_id": "generated",
        "parent": {
            "description": "generated",
            "html_url": "https:\\/\\/example.com\\/",
            "id": 2,
            "members_url": "generated",
            "name": "generated",
            "node_id": "generated",
            "permission": "generated",
            "privacy": "open",
            "notification_setting": "notifications_disabled",
            "repositories_url": "https:\\/\\/example.com\\/",
            "slug": "generated",
            "url": "https:\\/\\/example.com\\/"
        },
        "permission": "generated",
        "privacy": "open",
        "notification_setting": "notifications_disabled",
        "repositories_url": "https:\\/\\/example.com\\/",
        "slug": "generated",
        "url": "https:\\/\\/example.com\\/"
    }
}';

    /**
     * enterprise: An enterprise on GitHub.
     * installation: The GitHub App installation. Webhook payloads contain the `installation` property when the event is configured
    for and sent to a GitHub App. For more information,
    see "[Using webhooks with GitHub Apps](https://docs.github.com/apps/creating-github-apps/registering-a-github-app/using-webhooks-with-github-apps)."
     * organization: A GitHub organization. Webhook payloads contain the `organization` property when the webhook is configured for an
    organization, or when the event occurs from activity in a repository owned by an organization.
     * repository: A git repository
     * sender: The GitHub user that triggered the event. This property is included in every webhook payload.
     * team: Groups of organization members that gives permissions on specified repositories.
     */
    public function __construct(public string $action, public Schema\Enterprise|null $enterprise, public Schema\SimpleInstallation|null $installation, public Schema\OrganizationSimpleWebhooks $organization, public Schema\WebhookTeamDeleted\Repository|null $repository, public Schema\SimpleUserWebhooks|null $sender, public Schema\WebhookTeamDeleted\Team $team)
    {
    }
}
