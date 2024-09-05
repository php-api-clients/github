<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class WebhookRepositoryRulesetEdited
{
    public const SCHEMA_JSON         = '{
    "title": "repository ruleset edited event",
    "required": [
        "action",
        "repository_ruleset",
        "sender"
    ],
    "type": "object",
    "properties": {
        "action": {
            "enum": [
                "edited"
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
            "description": "An enterprise on GitHub. Webhook payloads contain the `enterprise` property when the webhook is configured\\non an enterprise account or an organization that\'s part of an enterprise account. For more information,\\nsee \\"[About enterprise accounts](https:\\/\\/docs.github.com\\/admin\\/overview\\/about-enterprise-accounts).\\""
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
                "archive_url",
                "assignees_url",
                "blobs_url",
                "branches_url",
                "collaborators_url",
                "comments_url",
                "commits_url",
                "compare_url",
                "contents_url",
                "contributors_url",
                "deployments_url",
                "description",
                "downloads_url",
                "events_url",
                "fork",
                "forks_url",
                "full_name",
                "git_commits_url",
                "git_refs_url",
                "git_tags_url",
                "hooks_url",
                "html_url",
                "id",
                "node_id",
                "issue_comment_url",
                "issue_events_url",
                "issues_url",
                "keys_url",
                "labels_url",
                "languages_url",
                "merges_url",
                "milestones_url",
                "name",
                "notifications_url",
                "owner",
                "private",
                "pulls_url",
                "releases_url",
                "stargazers_url",
                "statuses_url",
                "subscribers_url",
                "subscription_url",
                "tags_url",
                "teams_url",
                "trees_url",
                "url",
                "clone_url",
                "default_branch",
                "forks",
                "forks_count",
                "git_url",
                "has_downloads",
                "has_issues",
                "has_projects",
                "has_wiki",
                "has_pages",
                "homepage",
                "language",
                "archived",
                "disabled",
                "mirror_url",
                "open_issues",
                "open_issues_count",
                "license",
                "pushed_at",
                "size",
                "ssh_url",
                "stargazers_count",
                "svn_url",
                "watchers",
                "watchers_count",
                "created_at",
                "updated_at"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "description": "Unique identifier of the repository",
                    "format": "int64",
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
                    "description": "The name of the repository.",
                    "examples": [
                        "Team Environment"
                    ]
                },
                "full_name": {
                    "type": "string",
                    "examples": [
                        "octocat\\/Hello-World"
                    ]
                },
                "license": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
                        {
                            "title": "License Simple",
                            "required": [
                                "key",
                                "name",
                                "url",
                                "spdx_id",
                                "node_id"
                            ],
                            "type": "object",
                            "properties": {
                                "key": {
                                    "type": "string",
                                    "examples": [
                                        "mit"
                                    ]
                                },
                                "name": {
                                    "type": "string",
                                    "examples": [
                                        "MIT License"
                                    ]
                                },
                                "url": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/licenses\\/mit"
                                    ]
                                },
                                "spdx_id": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "examples": [
                                        "MIT"
                                    ]
                                },
                                "node_id": {
                                    "type": "string",
                                    "examples": [
                                        "MDc6TGljZW5zZW1pdA=="
                                    ]
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                }
                            },
                            "description": "License Simple"
                        }
                    ]
                },
                "organization": {
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
                                }
                            },
                            "description": "A GitHub user."
                        }
                    ]
                },
                "forks": {
                    "type": "integer"
                },
                "permissions": {
                    "required": [
                        "admin",
                        "pull",
                        "push"
                    ],
                    "type": "object",
                    "properties": {
                        "admin": {
                            "type": "boolean"
                        },
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
                        }
                    }
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
                        }
                    },
                    "description": "A GitHub user."
                },
                "private": {
                    "type": "boolean",
                    "description": "Whether the repository is private or public.",
                    "default": false
                },
                "html_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/github.com\\/octocat\\/Hello-World"
                    ]
                },
                "description": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "examples": [
                        "This your first repo!"
                    ]
                },
                "fork": {
                    "type": "boolean"
                },
                "url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"
                    ]
                },
                "archive_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"
                    ]
                },
                "assignees_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"
                    ]
                },
                "blobs_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"
                    ]
                },
                "branches_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"
                    ]
                },
                "collaborators_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"
                    ]
                },
                "comments_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"
                    ]
                },
                "commits_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"
                    ]
                },
                "compare_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"
                    ]
                },
                "contents_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"
                    ]
                },
                "contributors_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"
                    ]
                },
                "deployments_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"
                    ]
                },
                "downloads_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"
                    ]
                },
                "events_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"
                    ]
                },
                "forks_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"
                    ]
                },
                "git_commits_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"
                    ]
                },
                "git_refs_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"
                    ]
                },
                "git_tags_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"
                    ]
                },
                "git_url": {
                    "type": "string",
                    "examples": [
                        "git:github.com\\/octocat\\/Hello-World.git"
                    ]
                },
                "issue_comment_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"
                    ]
                },
                "issue_events_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"
                    ]
                },
                "issues_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"
                    ]
                },
                "keys_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"
                    ]
                },
                "labels_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"
                    ]
                },
                "languages_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"
                    ]
                },
                "merges_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"
                    ]
                },
                "milestones_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"
                    ]
                },
                "notifications_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"
                    ]
                },
                "pulls_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"
                    ]
                },
                "releases_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"
                    ]
                },
                "ssh_url": {
                    "type": "string",
                    "examples": [
                        "git@github.com:octocat\\/Hello-World.git"
                    ]
                },
                "stargazers_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"
                    ]
                },
                "statuses_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"
                    ]
                },
                "subscribers_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"
                    ]
                },
                "subscription_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"
                    ]
                },
                "tags_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"
                    ]
                },
                "teams_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"
                    ]
                },
                "trees_url": {
                    "type": "string",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"
                    ]
                },
                "clone_url": {
                    "type": "string",
                    "examples": [
                        "https:\\/\\/github.com\\/octocat\\/Hello-World.git"
                    ]
                },
                "mirror_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri",
                    "examples": [
                        "git:git.example.com\\/octocat\\/Hello-World"
                    ]
                },
                "hooks_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"
                    ]
                },
                "svn_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/svn.github.com\\/octocat\\/Hello-World"
                    ]
                },
                "homepage": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/github.com"
                    ]
                },
                "language": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "forks_count": {
                    "type": "integer",
                    "examples": [
                        9
                    ]
                },
                "stargazers_count": {
                    "type": "integer",
                    "examples": [
                        80
                    ]
                },
                "watchers_count": {
                    "type": "integer",
                    "examples": [
                        80
                    ]
                },
                "size": {
                    "type": "integer",
                    "description": "The size of the repository, in kilobytes. Size is calculated hourly. When a repository is initially created, the size is 0.",
                    "examples": [
                        108
                    ]
                },
                "default_branch": {
                    "type": "string",
                    "description": "The default branch of the repository.",
                    "examples": [
                        "master"
                    ]
                },
                "open_issues_count": {
                    "type": "integer",
                    "examples": [
                        0
                    ]
                },
                "is_template": {
                    "type": "boolean",
                    "description": "Whether this repository acts as a template that can be used to generate new repositories.",
                    "default": false,
                    "examples": [
                        true
                    ]
                },
                "topics": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    }
                },
                "custom_properties": {
                    "type": "object",
                    "description": "The custom properties that were defined for the repository. The keys are the custom property names, and the values are the corresponding custom property values.",
                    "additionalProperties": true
                },
                "has_issues": {
                    "type": "boolean",
                    "description": "Whether issues are enabled.",
                    "default": true,
                    "examples": [
                        true
                    ]
                },
                "has_projects": {
                    "type": "boolean",
                    "description": "Whether projects are enabled.",
                    "default": true,
                    "examples": [
                        true
                    ]
                },
                "has_wiki": {
                    "type": "boolean",
                    "description": "Whether the wiki is enabled.",
                    "default": true,
                    "examples": [
                        true
                    ]
                },
                "has_pages": {
                    "type": "boolean"
                },
                "has_downloads": {
                    "type": "boolean",
                    "description": "Whether downloads are enabled.",
                    "default": true,
                    "examples": [
                        true
                    ]
                },
                "has_discussions": {
                    "type": "boolean",
                    "description": "Whether discussions are enabled.",
                    "default": false,
                    "examples": [
                        true
                    ]
                },
                "archived": {
                    "type": "boolean",
                    "description": "Whether the repository is archived.",
                    "default": false
                },
                "disabled": {
                    "type": "boolean",
                    "description": "Returns whether or not this repository disabled."
                },
                "visibility": {
                    "type": "string",
                    "description": "The repository visibility: public, private, or internal.",
                    "default": "public"
                },
                "pushed_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time",
                    "examples": [
                        "2011-01-26T19:06:43Z"
                    ]
                },
                "created_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time",
                    "examples": [
                        "2011-01-26T19:01:12Z"
                    ]
                },
                "updated_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time",
                    "examples": [
                        "2011-01-26T19:14:43Z"
                    ]
                },
                "allow_rebase_merge": {
                    "type": "boolean",
                    "description": "Whether to allow rebase merges for pull requests.",
                    "default": true,
                    "examples": [
                        true
                    ]
                },
                "template_repository": {
                    "type": [
                        "object",
                        "null"
                    ],
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
                        "full_name": {
                            "type": "string"
                        },
                        "owner": {
                            "type": "object",
                            "properties": {
                                "login": {
                                    "type": "string"
                                },
                                "id": {
                                    "type": "integer"
                                },
                                "node_id": {
                                    "type": "string"
                                },
                                "avatar_url": {
                                    "type": "string"
                                },
                                "gravatar_id": {
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string"
                                },
                                "html_url": {
                                    "type": "string"
                                },
                                "followers_url": {
                                    "type": "string"
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
                                    "type": "string"
                                },
                                "organizations_url": {
                                    "type": "string"
                                },
                                "repos_url": {
                                    "type": "string"
                                },
                                "events_url": {
                                    "type": "string"
                                },
                                "received_events_url": {
                                    "type": "string"
                                },
                                "type": {
                                    "type": "string"
                                },
                                "site_admin": {
                                    "type": "boolean"
                                }
                            }
                        },
                        "private": {
                            "type": "boolean"
                        },
                        "html_url": {
                            "type": "string"
                        },
                        "description": {
                            "type": "string"
                        },
                        "fork": {
                            "type": "boolean"
                        },
                        "url": {
                            "type": "string"
                        },
                        "archive_url": {
                            "type": "string"
                        },
                        "assignees_url": {
                            "type": "string"
                        },
                        "blobs_url": {
                            "type": "string"
                        },
                        "branches_url": {
                            "type": "string"
                        },
                        "collaborators_url": {
                            "type": "string"
                        },
                        "comments_url": {
                            "type": "string"
                        },
                        "commits_url": {
                            "type": "string"
                        },
                        "compare_url": {
                            "type": "string"
                        },
                        "contents_url": {
                            "type": "string"
                        },
                        "contributors_url": {
                            "type": "string"
                        },
                        "deployments_url": {
                            "type": "string"
                        },
                        "downloads_url": {
                            "type": "string"
                        },
                        "events_url": {
                            "type": "string"
                        },
                        "forks_url": {
                            "type": "string"
                        },
                        "git_commits_url": {
                            "type": "string"
                        },
                        "git_refs_url": {
                            "type": "string"
                        },
                        "git_tags_url": {
                            "type": "string"
                        },
                        "git_url": {
                            "type": "string"
                        },
                        "issue_comment_url": {
                            "type": "string"
                        },
                        "issue_events_url": {
                            "type": "string"
                        },
                        "issues_url": {
                            "type": "string"
                        },
                        "keys_url": {
                            "type": "string"
                        },
                        "labels_url": {
                            "type": "string"
                        },
                        "languages_url": {
                            "type": "string"
                        },
                        "merges_url": {
                            "type": "string"
                        },
                        "milestones_url": {
                            "type": "string"
                        },
                        "notifications_url": {
                            "type": "string"
                        },
                        "pulls_url": {
                            "type": "string"
                        },
                        "releases_url": {
                            "type": "string"
                        },
                        "ssh_url": {
                            "type": "string"
                        },
                        "stargazers_url": {
                            "type": "string"
                        },
                        "statuses_url": {
                            "type": "string"
                        },
                        "subscribers_url": {
                            "type": "string"
                        },
                        "subscription_url": {
                            "type": "string"
                        },
                        "tags_url": {
                            "type": "string"
                        },
                        "teams_url": {
                            "type": "string"
                        },
                        "trees_url": {
                            "type": "string"
                        },
                        "clone_url": {
                            "type": "string"
                        },
                        "mirror_url": {
                            "type": "string"
                        },
                        "hooks_url": {
                            "type": "string"
                        },
                        "svn_url": {
                            "type": "string"
                        },
                        "homepage": {
                            "type": "string"
                        },
                        "language": {
                            "type": "string"
                        },
                        "forks_count": {
                            "type": "integer"
                        },
                        "stargazers_count": {
                            "type": "integer"
                        },
                        "watchers_count": {
                            "type": "integer"
                        },
                        "size": {
                            "type": "integer"
                        },
                        "default_branch": {
                            "type": "string"
                        },
                        "open_issues_count": {
                            "type": "integer"
                        },
                        "is_template": {
                            "type": "boolean"
                        },
                        "topics": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            }
                        },
                        "has_issues": {
                            "type": "boolean"
                        },
                        "has_projects": {
                            "type": "boolean"
                        },
                        "has_wiki": {
                            "type": "boolean"
                        },
                        "has_pages": {
                            "type": "boolean"
                        },
                        "has_downloads": {
                            "type": "boolean"
                        },
                        "archived": {
                            "type": "boolean"
                        },
                        "disabled": {
                            "type": "boolean"
                        },
                        "visibility": {
                            "type": "string"
                        },
                        "pushed_at": {
                            "type": "string"
                        },
                        "created_at": {
                            "type": "string"
                        },
                        "updated_at": {
                            "type": "string"
                        },
                        "permissions": {
                            "type": "object",
                            "properties": {
                                "admin": {
                                    "type": "boolean"
                                },
                                "maintain": {
                                    "type": "boolean"
                                },
                                "push": {
                                    "type": "boolean"
                                },
                                "triage": {
                                    "type": "boolean"
                                },
                                "pull": {
                                    "type": "boolean"
                                }
                            }
                        },
                        "allow_rebase_merge": {
                            "type": "boolean"
                        },
                        "temp_clone_token": {
                            "type": "string"
                        },
                        "allow_squash_merge": {
                            "type": "boolean"
                        },
                        "allow_auto_merge": {
                            "type": "boolean"
                        },
                        "delete_branch_on_merge": {
                            "type": "boolean"
                        },
                        "allow_update_branch": {
                            "type": "boolean"
                        },
                        "use_squash_pr_title_as_default": {
                            "type": "boolean"
                        },
                        "squash_merge_commit_title": {
                            "enum": [
                                "PR_TITLE",
                                "COMMIT_OR_PR_TITLE"
                            ],
                            "type": "string",
                            "description": "The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."
                        },
                        "squash_merge_commit_message": {
                            "enum": [
                                "PR_BODY",
                                "COMMIT_MESSAGES",
                                "BLANK"
                            ],
                            "type": "string",
                            "description": "The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."
                        },
                        "merge_commit_title": {
                            "enum": [
                                "PR_TITLE",
                                "MERGE_MESSAGE"
                            ],
                            "type": "string",
                            "description": "The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."
                        },
                        "merge_commit_message": {
                            "enum": [
                                "PR_BODY",
                                "PR_TITLE",
                                "BLANK"
                            ],
                            "type": "string",
                            "description": "The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."
                        },
                        "allow_merge_commit": {
                            "type": "boolean"
                        },
                        "subscribers_count": {
                            "type": "integer"
                        },
                        "network_count": {
                            "type": "integer"
                        }
                    }
                },
                "temp_clone_token": {
                    "type": "string"
                },
                "allow_squash_merge": {
                    "type": "boolean",
                    "description": "Whether to allow squash merges for pull requests.",
                    "default": true,
                    "examples": [
                        true
                    ]
                },
                "allow_auto_merge": {
                    "type": "boolean",
                    "description": "Whether to allow Auto-merge to be used on pull requests.",
                    "default": false,
                    "examples": [
                        false
                    ]
                },
                "delete_branch_on_merge": {
                    "type": "boolean",
                    "description": "Whether to delete head branches when pull requests are merged",
                    "default": false,
                    "examples": [
                        false
                    ]
                },
                "allow_update_branch": {
                    "type": "boolean",
                    "description": "Whether or not a pull request head branch that is behind its base branch can always be updated even if it is not required to be up to date before merging.",
                    "default": false,
                    "examples": [
                        false
                    ]
                },
                "use_squash_pr_title_as_default": {
                    "type": "boolean",
                    "description": "Whether a squash merge commit can use the pull request title as default. **This property has been deprecated. Please use `squash_merge_commit_title` instead.",
                    "default": false,
                    "deprecated": true
                },
                "squash_merge_commit_title": {
                    "enum": [
                        "PR_TITLE",
                        "COMMIT_OR_PR_TITLE"
                    ],
                    "type": "string",
                    "description": "The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."
                },
                "squash_merge_commit_message": {
                    "enum": [
                        "PR_BODY",
                        "COMMIT_MESSAGES",
                        "BLANK"
                    ],
                    "type": "string",
                    "description": "The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."
                },
                "merge_commit_title": {
                    "enum": [
                        "PR_TITLE",
                        "MERGE_MESSAGE"
                    ],
                    "type": "string",
                    "description": "The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."
                },
                "merge_commit_message": {
                    "enum": [
                        "PR_BODY",
                        "PR_TITLE",
                        "BLANK"
                    ],
                    "type": "string",
                    "description": "The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."
                },
                "allow_merge_commit": {
                    "type": "boolean",
                    "description": "Whether to allow merge commits for pull requests.",
                    "default": true,
                    "examples": [
                        true
                    ]
                },
                "allow_forking": {
                    "type": "boolean",
                    "description": "Whether to allow forking this repo"
                },
                "web_commit_signoff_required": {
                    "type": "boolean",
                    "description": "Whether to require contributors to sign off on web-based commits",
                    "default": false
                },
                "subscribers_count": {
                    "type": "integer"
                },
                "network_count": {
                    "type": "integer"
                },
                "open_issues": {
                    "type": "integer"
                },
                "watchers": {
                    "type": "integer"
                },
                "master_branch": {
                    "type": "string"
                },
                "starred_at": {
                    "type": "string",
                    "examples": [
                        "\\"2020-07-09T00:17:42Z\\""
                    ]
                },
                "anonymous_access_enabled": {
                    "type": "boolean",
                    "description": "Whether anonymous git access is enabled for this repository"
                }
            },
            "description": "The repository on GitHub where the event occurred. Webhook payloads contain the `repository` property\\nwhen the event occurs from activity in a repository."
        },
        "repository_ruleset": {
            "title": "Repository ruleset",
            "required": [
                "id",
                "name",
                "source",
                "enforcement"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "description": "The ID of the ruleset"
                },
                "name": {
                    "type": "string",
                    "description": "The name of the ruleset"
                },
                "target": {
                    "enum": [
                        "branch",
                        "tag",
                        "push"
                    ],
                    "type": "string",
                    "description": "The target of the ruleset\\n\\n> [!NOTE]\\n> The `push` target is in beta and is subject to change."
                },
                "source_type": {
                    "enum": [
                        "Repository",
                        "Organization"
                    ],
                    "type": "string",
                    "description": "The type of the source of the ruleset"
                },
                "source": {
                    "type": "string",
                    "description": "The name of the source"
                },
                "enforcement": {
                    "enum": [
                        "disabled",
                        "active",
                        "evaluate"
                    ],
                    "type": "string",
                    "description": "The enforcement level of the ruleset. `evaluate` allows admins to test rules before enforcing them. Admins can view insights on the Rule Insights page (`evaluate` is only available with GitHub Enterprise)."
                },
                "bypass_actors": {
                    "type": "array",
                    "items": {
                        "title": "Repository Ruleset Bypass Actor",
                        "required": [
                            "actor_type",
                            "bypass_mode"
                        ],
                        "type": "object",
                        "properties": {
                            "actor_id": {
                                "type": [
                                    "integer",
                                    "null"
                                ],
                                "description": "The ID of the actor that can bypass a ruleset. If `actor_type` is `OrganizationAdmin`, this should be `1`. If `actor_type` is `DeployKey`, this should be null. `OrganizationAdmin` is not applicable for personal repositories."
                            },
                            "actor_type": {
                                "enum": [
                                    "Integration",
                                    "OrganizationAdmin",
                                    "RepositoryRole",
                                    "Team",
                                    "DeployKey"
                                ],
                                "type": "string",
                                "description": "The type of actor that can bypass a ruleset."
                            },
                            "bypass_mode": {
                                "enum": [
                                    "always",
                                    "pull_request"
                                ],
                                "type": "string",
                                "description": "When the specified actor can bypass the ruleset. `pull_request` means that an actor can only bypass rules on pull requests. `pull_request` is not applicable for the `DeployKey` actor type."
                            }
                        },
                        "description": "An actor that can bypass rules in a ruleset"
                    },
                    "description": "The actors that can bypass the rules in this ruleset"
                },
                "current_user_can_bypass": {
                    "enum": [
                        "always",
                        "pull_requests_only",
                        "never"
                    ],
                    "type": "string",
                    "description": "The bypass type of the user making the API request for this ruleset. This field is only returned when\\nquerying the repository-level endpoint."
                },
                "node_id": {
                    "type": "string"
                },
                "_links": {
                    "type": "object",
                    "properties": {
                        "self": {
                            "type": "object",
                            "properties": {
                                "href": {
                                    "type": "string",
                                    "description": "The URL of the ruleset"
                                }
                            }
                        },
                        "html": {
                            "type": "object",
                            "properties": {
                                "href": {
                                    "type": "string",
                                    "description": "The html URL of the ruleset"
                                }
                            }
                        }
                    }
                },
                "conditions": {
                    "type": [
                        "null",
                        "object"
                    ],
                    "anyOf": [
                        {
                            "title": "Repository ruleset conditions for ref names",
                            "type": "object",
                            "properties": {
                                "ref_name": {
                                    "type": "object",
                                    "properties": {
                                        "include": {
                                            "type": "array",
                                            "items": {
                                                "type": "string"
                                            },
                                            "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                                        },
                                        "exclude": {
                                            "type": "array",
                                            "items": {
                                                "type": "string"
                                            },
                                            "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                                        }
                                    }
                                }
                            },
                            "description": "Parameters for a repository ruleset ref name condition"
                        },
                        {
                            "title": "Organization ruleset conditions",
                            "type": "object",
                            "oneOf": [
                                {
                                    "title": "repository_name_and_ref_name",
                                    "type": "object",
                                    "allOf": [
                                        {
                                            "title": "Repository ruleset conditions for ref names",
                                            "type": "object",
                                            "properties": {
                                                "ref_name": {
                                                    "type": "object",
                                                    "properties": {
                                                        "include": {
                                                            "type": "array",
                                                            "items": {
                                                                "type": "string"
                                                            },
                                                            "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                                                        },
                                                        "exclude": {
                                                            "type": "array",
                                                            "items": {
                                                                "type": "string"
                                                            },
                                                            "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                                                        }
                                                    }
                                                }
                                            },
                                            "description": "Parameters for a repository ruleset ref name condition"
                                        },
                                        {
                                            "title": "Repository ruleset conditions for repository names",
                                            "required": [
                                                "repository_name"
                                            ],
                                            "type": "object",
                                            "properties": {
                                                "repository_name": {
                                                    "type": "object",
                                                    "properties": {
                                                        "include": {
                                                            "type": "array",
                                                            "items": {
                                                                "type": "string"
                                                            },
                                                            "description": "Array of repository names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all repositories."
                                                        },
                                                        "exclude": {
                                                            "type": "array",
                                                            "items": {
                                                                "type": "string"
                                                            },
                                                            "description": "Array of repository names or patterns to exclude. The condition will not pass if any of these patterns match."
                                                        },
                                                        "protected": {
                                                            "type": "boolean",
                                                            "description": "Whether renaming of target repositories is prevented."
                                                        }
                                                    }
                                                }
                                            },
                                            "description": "Parameters for a repository name condition"
                                        }
                                    ],
                                    "description": "Conditions to target repositories by name and refs by name"
                                },
                                {
                                    "title": "repository_id_and_ref_name",
                                    "type": "object",
                                    "allOf": [
                                        {
                                            "title": "Repository ruleset conditions for ref names",
                                            "type": "object",
                                            "properties": {
                                                "ref_name": {
                                                    "type": "object",
                                                    "properties": {
                                                        "include": {
                                                            "type": "array",
                                                            "items": {
                                                                "type": "string"
                                                            },
                                                            "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                                                        },
                                                        "exclude": {
                                                            "type": "array",
                                                            "items": {
                                                                "type": "string"
                                                            },
                                                            "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                                                        }
                                                    }
                                                }
                                            },
                                            "description": "Parameters for a repository ruleset ref name condition"
                                        },
                                        {
                                            "title": "Repository ruleset conditions for repository IDs",
                                            "required": [
                                                "repository_id"
                                            ],
                                            "type": "object",
                                            "properties": {
                                                "repository_id": {
                                                    "type": "object",
                                                    "properties": {
                                                        "repository_ids": {
                                                            "type": "array",
                                                            "items": {
                                                                "type": "integer"
                                                            },
                                                            "description": "The repository IDs that the ruleset applies to. One of these IDs must match for the condition to pass."
                                                        }
                                                    }
                                                }
                                            },
                                            "description": "Parameters for a repository ID condition"
                                        }
                                    ],
                                    "description": "Conditions to target repositories by id and refs by name"
                                },
                                {
                                    "title": "repository_property_and_ref_name",
                                    "type": "object",
                                    "allOf": [
                                        {
                                            "title": "Repository ruleset conditions for ref names",
                                            "type": "object",
                                            "properties": {
                                                "ref_name": {
                                                    "type": "object",
                                                    "properties": {
                                                        "include": {
                                                            "type": "array",
                                                            "items": {
                                                                "type": "string"
                                                            },
                                                            "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                                                        },
                                                        "exclude": {
                                                            "type": "array",
                                                            "items": {
                                                                "type": "string"
                                                            },
                                                            "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                                                        }
                                                    }
                                                }
                                            },
                                            "description": "Parameters for a repository ruleset ref name condition"
                                        },
                                        {
                                            "title": "Repository ruleset conditions for repository properties",
                                            "required": [
                                                "repository_property"
                                            ],
                                            "type": "object",
                                            "properties": {
                                                "repository_property": {
                                                    "type": "object",
                                                    "properties": {
                                                        "include": {
                                                            "type": "array",
                                                            "items": {
                                                                "title": "Repository ruleset property targeting definition",
                                                                "required": [
                                                                    "name",
                                                                    "property_values"
                                                                ],
                                                                "type": "object",
                                                                "properties": {
                                                                    "name": {
                                                                        "type": "string",
                                                                        "description": "The name of the repository property to target"
                                                                    },
                                                                    "property_values": {
                                                                        "type": "array",
                                                                        "items": {
                                                                            "type": "string"
                                                                        },
                                                                        "description": "The values to match for the repository property"
                                                                    },
                                                                    "source": {
                                                                        "enum": [
                                                                            "custom",
                                                                            "system"
                                                                        ],
                                                                        "type": "string",
                                                                        "description": "The source of the repository property. Defaults to \'custom\' if not specified."
                                                                    }
                                                                },
                                                                "description": "Parameters for a targeting a repository property"
                                                            },
                                                            "description": "The repository properties and values to include. All of these properties must match for the condition to pass."
                                                        },
                                                        "exclude": {
                                                            "type": "array",
                                                            "items": {
                                                                "title": "Repository ruleset property targeting definition",
                                                                "required": [
                                                                    "name",
                                                                    "property_values"
                                                                ],
                                                                "type": "object",
                                                                "properties": {
                                                                    "name": {
                                                                        "type": "string",
                                                                        "description": "The name of the repository property to target"
                                                                    },
                                                                    "property_values": {
                                                                        "type": "array",
                                                                        "items": {
                                                                            "type": "string"
                                                                        },
                                                                        "description": "The values to match for the repository property"
                                                                    },
                                                                    "source": {
                                                                        "enum": [
                                                                            "custom",
                                                                            "system"
                                                                        ],
                                                                        "type": "string",
                                                                        "description": "The source of the repository property. Defaults to \'custom\' if not specified."
                                                                    }
                                                                },
                                                                "description": "Parameters for a targeting a repository property"
                                                            },
                                                            "description": "The repository properties and values to exclude. The condition will not pass if any of these properties match."
                                                        }
                                                    }
                                                }
                                            },
                                            "description": "Parameters for a repository property condition"
                                        }
                                    ],
                                    "description": "Conditions to target repositories by property and refs by name"
                                }
                            ],
                            "description": "Conditions for an organization ruleset. The conditions object should contain both `repository_name` and `ref_name` properties or both `repository_id` and `ref_name` properties."
                        }
                    ]
                },
                "rules": {
                    "type": "array",
                    "items": {
                        "title": "Repository Rule",
                        "type": "object",
                        "oneOf": [
                            {
                                "title": "creation",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "creation"
                                        ],
                                        "type": "string"
                                    }
                                },
                                "description": "Only allow users with bypass permission to create matching refs."
                            },
                            {
                                "title": "update",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "update"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "update_allows_fetch_and_merge"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "update_allows_fetch_and_merge": {
                                                "type": "boolean",
                                                "description": "Branch can pull changes from its upstream repository"
                                            }
                                        }
                                    }
                                },
                                "description": "Only allow users with bypass permission to update matching refs."
                            },
                            {
                                "title": "deletion",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "deletion"
                                        ],
                                        "type": "string"
                                    }
                                },
                                "description": "Only allow users with bypass permissions to delete matching refs."
                            },
                            {
                                "title": "required_linear_history",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "required_linear_history"
                                        ],
                                        "type": "string"
                                    }
                                },
                                "description": "Prevent merge commits from being pushed to matching refs."
                            },
                            {
                                "title": "merge_queue",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "merge_queue"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "check_response_timeout_minutes",
                                            "grouping_strategy",
                                            "max_entries_to_build",
                                            "max_entries_to_merge",
                                            "merge_method",
                                            "min_entries_to_merge",
                                            "min_entries_to_merge_wait_minutes"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "check_response_timeout_minutes": {
                                                "maximum": 360,
                                                "minimum": 1,
                                                "type": "integer",
                                                "description": "Maximum time for a required status check to report a conclusion. After this much time has elapsed, checks that have not reported a conclusion will be assumed to have failed"
                                            },
                                            "grouping_strategy": {
                                                "enum": [
                                                    "ALLGREEN",
                                                    "HEADGREEN"
                                                ],
                                                "type": "string",
                                                "description": "When set to ALLGREEN, the merge commit created by merge queue for each PR in the group must pass all required checks to merge. When set to HEADGREEN, only the commit at the head of the merge group, i.e. the commit containing changes from all of the PRs in the group, must pass its required checks to merge."
                                            },
                                            "max_entries_to_build": {
                                                "maximum": 100,
                                                "minimum": 0,
                                                "type": "integer",
                                                "description": "Limit the number of queued pull requests requesting checks and workflow runs at the same time."
                                            },
                                            "max_entries_to_merge": {
                                                "maximum": 100,
                                                "minimum": 0,
                                                "type": "integer",
                                                "description": "The maximum number of PRs that will be merged together in a group."
                                            },
                                            "merge_method": {
                                                "enum": [
                                                    "MERGE",
                                                    "SQUASH",
                                                    "REBASE"
                                                ],
                                                "type": "string",
                                                "description": "Method to use when merging changes from queued pull requests."
                                            },
                                            "min_entries_to_merge": {
                                                "maximum": 100,
                                                "minimum": 0,
                                                "type": "integer",
                                                "description": "The minimum number of PRs that will be merged together in a group."
                                            },
                                            "min_entries_to_merge_wait_minutes": {
                                                "maximum": 360,
                                                "minimum": 0,
                                                "type": "integer",
                                                "description": "The time merge queue should wait after the first PR is added to the queue for the minimum group size to be met. After this time has elapsed, the minimum group size will be ignored and a smaller group will be merged."
                                            }
                                        }
                                    }
                                },
                                "description": "Merges must be performed via a merge queue."
                            },
                            {
                                "title": "required_deployments",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "required_deployments"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "required_deployment_environments"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "required_deployment_environments": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "The environments that must be successfully deployed to before branches can be merged."
                                            }
                                        }
                                    }
                                },
                                "description": "Choose which environments must be successfully deployed to before refs can be pushed into a ref that matches this rule."
                            },
                            {
                                "title": "required_signatures",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "required_signatures"
                                        ],
                                        "type": "string"
                                    }
                                },
                                "description": "Commits pushed to matching refs must have verified signatures."
                            },
                            {
                                "title": "pull_request",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "pull_request"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "dismiss_stale_reviews_on_push",
                                            "require_code_owner_review",
                                            "require_last_push_approval",
                                            "required_approving_review_count",
                                            "required_review_thread_resolution"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "dismiss_stale_reviews_on_push": {
                                                "type": "boolean",
                                                "description": "New, reviewable commits pushed will dismiss previous pull request review approvals."
                                            },
                                            "require_code_owner_review": {
                                                "type": "boolean",
                                                "description": "Require an approving review in pull requests that modify files that have a designated code owner."
                                            },
                                            "require_last_push_approval": {
                                                "type": "boolean",
                                                "description": "Whether the most recent reviewable push must be approved by someone other than the person who pushed it."
                                            },
                                            "required_approving_review_count": {
                                                "maximum": 10,
                                                "minimum": 0,
                                                "type": "integer",
                                                "description": "The number of approving reviews that are required before a pull request can be merged."
                                            },
                                            "required_review_thread_resolution": {
                                                "type": "boolean",
                                                "description": "All conversations on code must be resolved before a pull request can be merged."
                                            }
                                        }
                                    }
                                },
                                "description": "Require all commits be made to a non-target branch and submitted via a pull request before they can be merged."
                            },
                            {
                                "title": "required_status_checks",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "required_status_checks"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "required_status_checks",
                                            "strict_required_status_checks_policy"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "do_not_enforce_on_create": {
                                                "type": "boolean",
                                                "description": "Allow repositories and branches to be created if a check would otherwise prohibit it."
                                            },
                                            "required_status_checks": {
                                                "type": "array",
                                                "items": {
                                                    "title": "StatusCheckConfiguration",
                                                    "required": [
                                                        "context"
                                                    ],
                                                    "type": "object",
                                                    "properties": {
                                                        "context": {
                                                            "type": "string",
                                                            "description": "The status check context name that must be present on the commit."
                                                        },
                                                        "integration_id": {
                                                            "type": "integer",
                                                            "description": "The optional integration ID that this status check must originate from."
                                                        }
                                                    },
                                                    "description": "Required status check"
                                                },
                                                "description": "Status checks that are required."
                                            },
                                            "strict_required_status_checks_policy": {
                                                "type": "boolean",
                                                "description": "Whether pull requests targeting a matching branch must be tested with the latest code. This setting will not take effect unless at least one status check is enabled."
                                            }
                                        }
                                    }
                                },
                                "description": "Choose which status checks must pass before the ref is updated. When enabled, commits must first be pushed to another ref where the checks pass."
                            },
                            {
                                "title": "non_fast_forward",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "non_fast_forward"
                                        ],
                                        "type": "string"
                                    }
                                },
                                "description": "Prevent users with push access from force pushing to refs."
                            },
                            {
                                "title": "commit_message_pattern",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "commit_message_pattern"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "operator",
                                            "pattern"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "name": {
                                                "type": "string",
                                                "description": "How this rule will appear to users."
                                            },
                                            "negate": {
                                                "type": "boolean",
                                                "description": "If true, the rule will fail if the pattern matches."
                                            },
                                            "operator": {
                                                "enum": [
                                                    "starts_with",
                                                    "ends_with",
                                                    "contains",
                                                    "regex"
                                                ],
                                                "type": "string",
                                                "description": "The operator to use for matching."
                                            },
                                            "pattern": {
                                                "type": "string",
                                                "description": "The pattern to match with."
                                            }
                                        }
                                    }
                                },
                                "description": "Parameters to be used for the commit_message_pattern rule"
                            },
                            {
                                "title": "commit_author_email_pattern",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "commit_author_email_pattern"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "operator",
                                            "pattern"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "name": {
                                                "type": "string",
                                                "description": "How this rule will appear to users."
                                            },
                                            "negate": {
                                                "type": "boolean",
                                                "description": "If true, the rule will fail if the pattern matches."
                                            },
                                            "operator": {
                                                "enum": [
                                                    "starts_with",
                                                    "ends_with",
                                                    "contains",
                                                    "regex"
                                                ],
                                                "type": "string",
                                                "description": "The operator to use for matching."
                                            },
                                            "pattern": {
                                                "type": "string",
                                                "description": "The pattern to match with."
                                            }
                                        }
                                    }
                                },
                                "description": "Parameters to be used for the commit_author_email_pattern rule"
                            },
                            {
                                "title": "committer_email_pattern",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "committer_email_pattern"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "operator",
                                            "pattern"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "name": {
                                                "type": "string",
                                                "description": "How this rule will appear to users."
                                            },
                                            "negate": {
                                                "type": "boolean",
                                                "description": "If true, the rule will fail if the pattern matches."
                                            },
                                            "operator": {
                                                "enum": [
                                                    "starts_with",
                                                    "ends_with",
                                                    "contains",
                                                    "regex"
                                                ],
                                                "type": "string",
                                                "description": "The operator to use for matching."
                                            },
                                            "pattern": {
                                                "type": "string",
                                                "description": "The pattern to match with."
                                            }
                                        }
                                    }
                                },
                                "description": "Parameters to be used for the committer_email_pattern rule"
                            },
                            {
                                "title": "branch_name_pattern",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "branch_name_pattern"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "operator",
                                            "pattern"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "name": {
                                                "type": "string",
                                                "description": "How this rule will appear to users."
                                            },
                                            "negate": {
                                                "type": "boolean",
                                                "description": "If true, the rule will fail if the pattern matches."
                                            },
                                            "operator": {
                                                "enum": [
                                                    "starts_with",
                                                    "ends_with",
                                                    "contains",
                                                    "regex"
                                                ],
                                                "type": "string",
                                                "description": "The operator to use for matching."
                                            },
                                            "pattern": {
                                                "type": "string",
                                                "description": "The pattern to match with."
                                            }
                                        }
                                    }
                                },
                                "description": "Parameters to be used for the branch_name_pattern rule"
                            },
                            {
                                "title": "tag_name_pattern",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "tag_name_pattern"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "operator",
                                            "pattern"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "name": {
                                                "type": "string",
                                                "description": "How this rule will appear to users."
                                            },
                                            "negate": {
                                                "type": "boolean",
                                                "description": "If true, the rule will fail if the pattern matches."
                                            },
                                            "operator": {
                                                "enum": [
                                                    "starts_with",
                                                    "ends_with",
                                                    "contains",
                                                    "regex"
                                                ],
                                                "type": "string",
                                                "description": "The operator to use for matching."
                                            },
                                            "pattern": {
                                                "type": "string",
                                                "description": "The pattern to match with."
                                            }
                                        }
                                    }
                                },
                                "description": "Parameters to be used for the tag_name_pattern rule"
                            },
                            {
                                "title": "file_path_restriction",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "file_path_restriction"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "restricted_file_paths"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "restricted_file_paths": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "The file paths that are restricted from being pushed to the commit graph."
                                            }
                                        }
                                    }
                                },
                                "description": "> [!NOTE]\\n> `file_path_restriction` is in beta and subject to change.\\n\\nPrevent commits that include changes in specified file paths from being pushed to the commit graph."
                            },
                            {
                                "title": "max_file_path_length",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "max_file_path_length"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "max_file_path_length"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "max_file_path_length": {
                                                "maximum": 256,
                                                "minimum": 1,
                                                "type": "integer",
                                                "description": "The maximum amount of characters allowed in file paths"
                                            }
                                        }
                                    }
                                },
                                "description": "> [!NOTE]\\n> `max_file_path_length` is in beta and subject to change.\\n\\nPrevent commits that include file paths that exceed a specified character limit from being pushed to the commit graph."
                            },
                            {
                                "title": "file_extension_restriction",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "file_extension_restriction"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "restricted_file_extensions"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "restricted_file_extensions": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "The file extensions that are restricted from being pushed to the commit graph."
                                            }
                                        }
                                    }
                                },
                                "description": "> [!NOTE]\\n> `file_extension_restriction` is in beta and subject to change.\\n\\nPrevent commits that include files with specified file extensions from being pushed to the commit graph."
                            },
                            {
                                "title": "max_file_size",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "max_file_size"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "max_file_size"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "max_file_size": {
                                                "maximum": 100,
                                                "minimum": 1,
                                                "type": "integer",
                                                "description": "The maximum file size allowed in megabytes. This limit does not apply to Git Large File Storage (Git LFS)."
                                            }
                                        }
                                    }
                                },
                                "description": "> [!NOTE]\\n> `max_file_size` is in beta and subject to change.\\n\\nPrevent commits that exceed a specified file size limit from being pushed to the commit."
                            },
                            {
                                "title": "workflows",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "workflows"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "workflows"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "do_not_enforce_on_create": {
                                                "type": "boolean",
                                                "description": "Allow repositories and branches to be created if a check would otherwise prohibit it."
                                            },
                                            "workflows": {
                                                "type": "array",
                                                "items": {
                                                    "title": "WorkflowFileReference",
                                                    "required": [
                                                        "path",
                                                        "repository_id"
                                                    ],
                                                    "type": "object",
                                                    "properties": {
                                                        "path": {
                                                            "type": "string",
                                                            "description": "The path to the workflow file"
                                                        },
                                                        "ref": {
                                                            "type": "string",
                                                            "description": "The ref (branch or tag) of the workflow file to use"
                                                        },
                                                        "repository_id": {
                                                            "type": "integer",
                                                            "description": "The ID of the repository where the workflow is defined"
                                                        },
                                                        "sha": {
                                                            "type": "string",
                                                            "description": "The commit SHA of the workflow file to use"
                                                        }
                                                    },
                                                    "description": "A workflow that must run for this rule to pass"
                                                },
                                                "description": "Workflows that must pass for this rule to pass."
                                            }
                                        }
                                    }
                                },
                                "description": "Require all changes made to a targeted branch to pass the specified workflows before they can be merged."
                            },
                            {
                                "title": "code_scanning",
                                "required": [
                                    "type"
                                ],
                                "type": "object",
                                "properties": {
                                    "type": {
                                        "enum": [
                                            "code_scanning"
                                        ],
                                        "type": "string"
                                    },
                                    "parameters": {
                                        "required": [
                                            "code_scanning_tools"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "code_scanning_tools": {
                                                "type": "array",
                                                "items": {
                                                    "title": "CodeScanningTool",
                                                    "required": [
                                                        "alerts_threshold",
                                                        "security_alerts_threshold",
                                                        "tool"
                                                    ],
                                                    "type": "object",
                                                    "properties": {
                                                        "alerts_threshold": {
                                                            "enum": [
                                                                "none",
                                                                "errors",
                                                                "errors_and_warnings",
                                                                "all"
                                                            ],
                                                            "type": "string",
                                                            "description": "The severity level at which code scanning results that raise alerts block a reference update. For more information on alert severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                        },
                                                        "security_alerts_threshold": {
                                                            "enum": [
                                                                "none",
                                                                "critical",
                                                                "high_or_higher",
                                                                "medium_or_higher",
                                                                "all"
                                                            ],
                                                            "type": "string",
                                                            "description": "The severity level at which code scanning results that raise security alerts block a reference update. For more information on security severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                        },
                                                        "tool": {
                                                            "type": "string",
                                                            "description": "The name of a code scanning tool"
                                                        }
                                                    },
                                                    "description": "A tool that must provide code scanning results for this rule to pass."
                                                },
                                                "description": "Tools that must provide code scanning results for this rule to pass."
                                            }
                                        }
                                    }
                                },
                                "description": "Choose which tools must provide code scanning results before the reference is updated. When configured, code scanning must be enabled and have results for both the commit and the reference being updated."
                            }
                        ],
                        "description": "A repository rule."
                    }
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
            "description": "A set of rules to apply when specified conditions are met."
        },
        "changes": {
            "type": "object",
            "properties": {
                "name": {
                    "type": "object",
                    "properties": {
                        "from": {
                            "type": "string"
                        }
                    }
                },
                "enforcement": {
                    "type": "object",
                    "properties": {
                        "from": {
                            "type": "string"
                        }
                    }
                },
                "conditions": {
                    "type": "object",
                    "properties": {
                        "added": {
                            "type": "array",
                            "items": {
                                "title": "Repository ruleset conditions for ref names",
                                "type": "object",
                                "properties": {
                                    "ref_name": {
                                        "type": "object",
                                        "properties": {
                                            "include": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                                            },
                                            "exclude": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                                            }
                                        }
                                    }
                                },
                                "description": "Parameters for a repository ruleset ref name condition"
                            }
                        },
                        "deleted": {
                            "type": "array",
                            "items": {
                                "title": "Repository ruleset conditions for ref names",
                                "type": "object",
                                "properties": {
                                    "ref_name": {
                                        "type": "object",
                                        "properties": {
                                            "include": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                                            },
                                            "exclude": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                                            }
                                        }
                                    }
                                },
                                "description": "Parameters for a repository ruleset ref name condition"
                            }
                        },
                        "updated": {
                            "type": "array",
                            "items": {
                                "type": "object",
                                "properties": {
                                    "condition": {
                                        "title": "Repository ruleset conditions for ref names",
                                        "type": "object",
                                        "properties": {
                                            "ref_name": {
                                                "type": "object",
                                                "properties": {
                                                    "include": {
                                                        "type": "array",
                                                        "items": {
                                                            "type": "string"
                                                        },
                                                        "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                                                    },
                                                    "exclude": {
                                                        "type": "array",
                                                        "items": {
                                                            "type": "string"
                                                        },
                                                        "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Parameters for a repository ruleset ref name condition"
                                    },
                                    "changes": {
                                        "type": "object",
                                        "properties": {
                                            "condition_type": {
                                                "type": "object",
                                                "properties": {
                                                    "from": {
                                                        "type": "string"
                                                    }
                                                }
                                            },
                                            "target": {
                                                "type": "object",
                                                "properties": {
                                                    "from": {
                                                        "type": "string"
                                                    }
                                                }
                                            },
                                            "include": {
                                                "type": "object",
                                                "properties": {
                                                    "from": {
                                                        "type": "array",
                                                        "items": {
                                                            "type": "string"
                                                        }
                                                    }
                                                }
                                            },
                                            "exclude": {
                                                "type": "object",
                                                "properties": {
                                                    "from": {
                                                        "type": "array",
                                                        "items": {
                                                            "type": "string"
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                },
                "rules": {
                    "type": "object",
                    "properties": {
                        "added": {
                            "type": "array",
                            "items": {
                                "title": "Repository Rule",
                                "type": "object",
                                "oneOf": [
                                    {
                                        "title": "creation",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "creation"
                                                ],
                                                "type": "string"
                                            }
                                        },
                                        "description": "Only allow users with bypass permission to create matching refs."
                                    },
                                    {
                                        "title": "update",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "update"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "update_allows_fetch_and_merge"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "update_allows_fetch_and_merge": {
                                                        "type": "boolean",
                                                        "description": "Branch can pull changes from its upstream repository"
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Only allow users with bypass permission to update matching refs."
                                    },
                                    {
                                        "title": "deletion",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "deletion"
                                                ],
                                                "type": "string"
                                            }
                                        },
                                        "description": "Only allow users with bypass permissions to delete matching refs."
                                    },
                                    {
                                        "title": "required_linear_history",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "required_linear_history"
                                                ],
                                                "type": "string"
                                            }
                                        },
                                        "description": "Prevent merge commits from being pushed to matching refs."
                                    },
                                    {
                                        "title": "merge_queue",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "merge_queue"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "check_response_timeout_minutes",
                                                    "grouping_strategy",
                                                    "max_entries_to_build",
                                                    "max_entries_to_merge",
                                                    "merge_method",
                                                    "min_entries_to_merge",
                                                    "min_entries_to_merge_wait_minutes"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "check_response_timeout_minutes": {
                                                        "maximum": 360,
                                                        "minimum": 1,
                                                        "type": "integer",
                                                        "description": "Maximum time for a required status check to report a conclusion. After this much time has elapsed, checks that have not reported a conclusion will be assumed to have failed"
                                                    },
                                                    "grouping_strategy": {
                                                        "enum": [
                                                            "ALLGREEN",
                                                            "HEADGREEN"
                                                        ],
                                                        "type": "string",
                                                        "description": "When set to ALLGREEN, the merge commit created by merge queue for each PR in the group must pass all required checks to merge. When set to HEADGREEN, only the commit at the head of the merge group, i.e. the commit containing changes from all of the PRs in the group, must pass its required checks to merge."
                                                    },
                                                    "max_entries_to_build": {
                                                        "maximum": 100,
                                                        "minimum": 0,
                                                        "type": "integer",
                                                        "description": "Limit the number of queued pull requests requesting checks and workflow runs at the same time."
                                                    },
                                                    "max_entries_to_merge": {
                                                        "maximum": 100,
                                                        "minimum": 0,
                                                        "type": "integer",
                                                        "description": "The maximum number of PRs that will be merged together in a group."
                                                    },
                                                    "merge_method": {
                                                        "enum": [
                                                            "MERGE",
                                                            "SQUASH",
                                                            "REBASE"
                                                        ],
                                                        "type": "string",
                                                        "description": "Method to use when merging changes from queued pull requests."
                                                    },
                                                    "min_entries_to_merge": {
                                                        "maximum": 100,
                                                        "minimum": 0,
                                                        "type": "integer",
                                                        "description": "The minimum number of PRs that will be merged together in a group."
                                                    },
                                                    "min_entries_to_merge_wait_minutes": {
                                                        "maximum": 360,
                                                        "minimum": 0,
                                                        "type": "integer",
                                                        "description": "The time merge queue should wait after the first PR is added to the queue for the minimum group size to be met. After this time has elapsed, the minimum group size will be ignored and a smaller group will be merged."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Merges must be performed via a merge queue."
                                    },
                                    {
                                        "title": "required_deployments",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "required_deployments"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "required_deployment_environments"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "required_deployment_environments": {
                                                        "type": "array",
                                                        "items": {
                                                            "type": "string"
                                                        },
                                                        "description": "The environments that must be successfully deployed to before branches can be merged."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Choose which environments must be successfully deployed to before refs can be pushed into a ref that matches this rule."
                                    },
                                    {
                                        "title": "required_signatures",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "required_signatures"
                                                ],
                                                "type": "string"
                                            }
                                        },
                                        "description": "Commits pushed to matching refs must have verified signatures."
                                    },
                                    {
                                        "title": "pull_request",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "pull_request"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "dismiss_stale_reviews_on_push",
                                                    "require_code_owner_review",
                                                    "require_last_push_approval",
                                                    "required_approving_review_count",
                                                    "required_review_thread_resolution"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "dismiss_stale_reviews_on_push": {
                                                        "type": "boolean",
                                                        "description": "New, reviewable commits pushed will dismiss previous pull request review approvals."
                                                    },
                                                    "require_code_owner_review": {
                                                        "type": "boolean",
                                                        "description": "Require an approving review in pull requests that modify files that have a designated code owner."
                                                    },
                                                    "require_last_push_approval": {
                                                        "type": "boolean",
                                                        "description": "Whether the most recent reviewable push must be approved by someone other than the person who pushed it."
                                                    },
                                                    "required_approving_review_count": {
                                                        "maximum": 10,
                                                        "minimum": 0,
                                                        "type": "integer",
                                                        "description": "The number of approving reviews that are required before a pull request can be merged."
                                                    },
                                                    "required_review_thread_resolution": {
                                                        "type": "boolean",
                                                        "description": "All conversations on code must be resolved before a pull request can be merged."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Require all commits be made to a non-target branch and submitted via a pull request before they can be merged."
                                    },
                                    {
                                        "title": "required_status_checks",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "required_status_checks"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "required_status_checks",
                                                    "strict_required_status_checks_policy"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "do_not_enforce_on_create": {
                                                        "type": "boolean",
                                                        "description": "Allow repositories and branches to be created if a check would otherwise prohibit it."
                                                    },
                                                    "required_status_checks": {
                                                        "type": "array",
                                                        "items": {
                                                            "title": "StatusCheckConfiguration",
                                                            "required": [
                                                                "context"
                                                            ],
                                                            "type": "object",
                                                            "properties": {
                                                                "context": {
                                                                    "type": "string",
                                                                    "description": "The status check context name that must be present on the commit."
                                                                },
                                                                "integration_id": {
                                                                    "type": "integer",
                                                                    "description": "The optional integration ID that this status check must originate from."
                                                                }
                                                            },
                                                            "description": "Required status check"
                                                        },
                                                        "description": "Status checks that are required."
                                                    },
                                                    "strict_required_status_checks_policy": {
                                                        "type": "boolean",
                                                        "description": "Whether pull requests targeting a matching branch must be tested with the latest code. This setting will not take effect unless at least one status check is enabled."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Choose which status checks must pass before the ref is updated. When enabled, commits must first be pushed to another ref where the checks pass."
                                    },
                                    {
                                        "title": "non_fast_forward",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "non_fast_forward"
                                                ],
                                                "type": "string"
                                            }
                                        },
                                        "description": "Prevent users with push access from force pushing to refs."
                                    },
                                    {
                                        "title": "commit_message_pattern",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "commit_message_pattern"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "operator",
                                                    "pattern"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "name": {
                                                        "type": "string",
                                                        "description": "How this rule will appear to users."
                                                    },
                                                    "negate": {
                                                        "type": "boolean",
                                                        "description": "If true, the rule will fail if the pattern matches."
                                                    },
                                                    "operator": {
                                                        "enum": [
                                                            "starts_with",
                                                            "ends_with",
                                                            "contains",
                                                            "regex"
                                                        ],
                                                        "type": "string",
                                                        "description": "The operator to use for matching."
                                                    },
                                                    "pattern": {
                                                        "type": "string",
                                                        "description": "The pattern to match with."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Parameters to be used for the commit_message_pattern rule"
                                    },
                                    {
                                        "title": "commit_author_email_pattern",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "commit_author_email_pattern"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "operator",
                                                    "pattern"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "name": {
                                                        "type": "string",
                                                        "description": "How this rule will appear to users."
                                                    },
                                                    "negate": {
                                                        "type": "boolean",
                                                        "description": "If true, the rule will fail if the pattern matches."
                                                    },
                                                    "operator": {
                                                        "enum": [
                                                            "starts_with",
                                                            "ends_with",
                                                            "contains",
                                                            "regex"
                                                        ],
                                                        "type": "string",
                                                        "description": "The operator to use for matching."
                                                    },
                                                    "pattern": {
                                                        "type": "string",
                                                        "description": "The pattern to match with."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Parameters to be used for the commit_author_email_pattern rule"
                                    },
                                    {
                                        "title": "committer_email_pattern",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "committer_email_pattern"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "operator",
                                                    "pattern"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "name": {
                                                        "type": "string",
                                                        "description": "How this rule will appear to users."
                                                    },
                                                    "negate": {
                                                        "type": "boolean",
                                                        "description": "If true, the rule will fail if the pattern matches."
                                                    },
                                                    "operator": {
                                                        "enum": [
                                                            "starts_with",
                                                            "ends_with",
                                                            "contains",
                                                            "regex"
                                                        ],
                                                        "type": "string",
                                                        "description": "The operator to use for matching."
                                                    },
                                                    "pattern": {
                                                        "type": "string",
                                                        "description": "The pattern to match with."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Parameters to be used for the committer_email_pattern rule"
                                    },
                                    {
                                        "title": "branch_name_pattern",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "branch_name_pattern"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "operator",
                                                    "pattern"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "name": {
                                                        "type": "string",
                                                        "description": "How this rule will appear to users."
                                                    },
                                                    "negate": {
                                                        "type": "boolean",
                                                        "description": "If true, the rule will fail if the pattern matches."
                                                    },
                                                    "operator": {
                                                        "enum": [
                                                            "starts_with",
                                                            "ends_with",
                                                            "contains",
                                                            "regex"
                                                        ],
                                                        "type": "string",
                                                        "description": "The operator to use for matching."
                                                    },
                                                    "pattern": {
                                                        "type": "string",
                                                        "description": "The pattern to match with."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Parameters to be used for the branch_name_pattern rule"
                                    },
                                    {
                                        "title": "tag_name_pattern",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "tag_name_pattern"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "operator",
                                                    "pattern"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "name": {
                                                        "type": "string",
                                                        "description": "How this rule will appear to users."
                                                    },
                                                    "negate": {
                                                        "type": "boolean",
                                                        "description": "If true, the rule will fail if the pattern matches."
                                                    },
                                                    "operator": {
                                                        "enum": [
                                                            "starts_with",
                                                            "ends_with",
                                                            "contains",
                                                            "regex"
                                                        ],
                                                        "type": "string",
                                                        "description": "The operator to use for matching."
                                                    },
                                                    "pattern": {
                                                        "type": "string",
                                                        "description": "The pattern to match with."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Parameters to be used for the tag_name_pattern rule"
                                    },
                                    {
                                        "title": "file_path_restriction",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "file_path_restriction"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "restricted_file_paths"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "restricted_file_paths": {
                                                        "type": "array",
                                                        "items": {
                                                            "type": "string"
                                                        },
                                                        "description": "The file paths that are restricted from being pushed to the commit graph."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "> [!NOTE]\\n> `file_path_restriction` is in beta and subject to change.\\n\\nPrevent commits that include changes in specified file paths from being pushed to the commit graph."
                                    },
                                    {
                                        "title": "max_file_path_length",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "max_file_path_length"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "max_file_path_length"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "max_file_path_length": {
                                                        "maximum": 256,
                                                        "minimum": 1,
                                                        "type": "integer",
                                                        "description": "The maximum amount of characters allowed in file paths"
                                                    }
                                                }
                                            }
                                        },
                                        "description": "> [!NOTE]\\n> `max_file_path_length` is in beta and subject to change.\\n\\nPrevent commits that include file paths that exceed a specified character limit from being pushed to the commit graph."
                                    },
                                    {
                                        "title": "file_extension_restriction",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "file_extension_restriction"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "restricted_file_extensions"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "restricted_file_extensions": {
                                                        "type": "array",
                                                        "items": {
                                                            "type": "string"
                                                        },
                                                        "description": "The file extensions that are restricted from being pushed to the commit graph."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "> [!NOTE]\\n> `file_extension_restriction` is in beta and subject to change.\\n\\nPrevent commits that include files with specified file extensions from being pushed to the commit graph."
                                    },
                                    {
                                        "title": "max_file_size",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "max_file_size"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "max_file_size"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "max_file_size": {
                                                        "maximum": 100,
                                                        "minimum": 1,
                                                        "type": "integer",
                                                        "description": "The maximum file size allowed in megabytes. This limit does not apply to Git Large File Storage (Git LFS)."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "> [!NOTE]\\n> `max_file_size` is in beta and subject to change.\\n\\nPrevent commits that exceed a specified file size limit from being pushed to the commit."
                                    },
                                    {
                                        "title": "workflows",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "workflows"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "workflows"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "do_not_enforce_on_create": {
                                                        "type": "boolean",
                                                        "description": "Allow repositories and branches to be created if a check would otherwise prohibit it."
                                                    },
                                                    "workflows": {
                                                        "type": "array",
                                                        "items": {
                                                            "title": "WorkflowFileReference",
                                                            "required": [
                                                                "path",
                                                                "repository_id"
                                                            ],
                                                            "type": "object",
                                                            "properties": {
                                                                "path": {
                                                                    "type": "string",
                                                                    "description": "The path to the workflow file"
                                                                },
                                                                "ref": {
                                                                    "type": "string",
                                                                    "description": "The ref (branch or tag) of the workflow file to use"
                                                                },
                                                                "repository_id": {
                                                                    "type": "integer",
                                                                    "description": "The ID of the repository where the workflow is defined"
                                                                },
                                                                "sha": {
                                                                    "type": "string",
                                                                    "description": "The commit SHA of the workflow file to use"
                                                                }
                                                            },
                                                            "description": "A workflow that must run for this rule to pass"
                                                        },
                                                        "description": "Workflows that must pass for this rule to pass."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Require all changes made to a targeted branch to pass the specified workflows before they can be merged."
                                    },
                                    {
                                        "title": "code_scanning",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "code_scanning"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "code_scanning_tools"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "code_scanning_tools": {
                                                        "type": "array",
                                                        "items": {
                                                            "title": "CodeScanningTool",
                                                            "required": [
                                                                "alerts_threshold",
                                                                "security_alerts_threshold",
                                                                "tool"
                                                            ],
                                                            "type": "object",
                                                            "properties": {
                                                                "alerts_threshold": {
                                                                    "enum": [
                                                                        "none",
                                                                        "errors",
                                                                        "errors_and_warnings",
                                                                        "all"
                                                                    ],
                                                                    "type": "string",
                                                                    "description": "The severity level at which code scanning results that raise alerts block a reference update. For more information on alert severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                                },
                                                                "security_alerts_threshold": {
                                                                    "enum": [
                                                                        "none",
                                                                        "critical",
                                                                        "high_or_higher",
                                                                        "medium_or_higher",
                                                                        "all"
                                                                    ],
                                                                    "type": "string",
                                                                    "description": "The severity level at which code scanning results that raise security alerts block a reference update. For more information on security severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                                },
                                                                "tool": {
                                                                    "type": "string",
                                                                    "description": "The name of a code scanning tool"
                                                                }
                                                            },
                                                            "description": "A tool that must provide code scanning results for this rule to pass."
                                                        },
                                                        "description": "Tools that must provide code scanning results for this rule to pass."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Choose which tools must provide code scanning results before the reference is updated. When configured, code scanning must be enabled and have results for both the commit and the reference being updated."
                                    }
                                ],
                                "description": "A repository rule."
                            }
                        },
                        "deleted": {
                            "type": "array",
                            "items": {
                                "title": "Repository Rule",
                                "type": "object",
                                "oneOf": [
                                    {
                                        "title": "creation",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "creation"
                                                ],
                                                "type": "string"
                                            }
                                        },
                                        "description": "Only allow users with bypass permission to create matching refs."
                                    },
                                    {
                                        "title": "update",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "update"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "update_allows_fetch_and_merge"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "update_allows_fetch_and_merge": {
                                                        "type": "boolean",
                                                        "description": "Branch can pull changes from its upstream repository"
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Only allow users with bypass permission to update matching refs."
                                    },
                                    {
                                        "title": "deletion",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "deletion"
                                                ],
                                                "type": "string"
                                            }
                                        },
                                        "description": "Only allow users with bypass permissions to delete matching refs."
                                    },
                                    {
                                        "title": "required_linear_history",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "required_linear_history"
                                                ],
                                                "type": "string"
                                            }
                                        },
                                        "description": "Prevent merge commits from being pushed to matching refs."
                                    },
                                    {
                                        "title": "merge_queue",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "merge_queue"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "check_response_timeout_minutes",
                                                    "grouping_strategy",
                                                    "max_entries_to_build",
                                                    "max_entries_to_merge",
                                                    "merge_method",
                                                    "min_entries_to_merge",
                                                    "min_entries_to_merge_wait_minutes"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "check_response_timeout_minutes": {
                                                        "maximum": 360,
                                                        "minimum": 1,
                                                        "type": "integer",
                                                        "description": "Maximum time for a required status check to report a conclusion. After this much time has elapsed, checks that have not reported a conclusion will be assumed to have failed"
                                                    },
                                                    "grouping_strategy": {
                                                        "enum": [
                                                            "ALLGREEN",
                                                            "HEADGREEN"
                                                        ],
                                                        "type": "string",
                                                        "description": "When set to ALLGREEN, the merge commit created by merge queue for each PR in the group must pass all required checks to merge. When set to HEADGREEN, only the commit at the head of the merge group, i.e. the commit containing changes from all of the PRs in the group, must pass its required checks to merge."
                                                    },
                                                    "max_entries_to_build": {
                                                        "maximum": 100,
                                                        "minimum": 0,
                                                        "type": "integer",
                                                        "description": "Limit the number of queued pull requests requesting checks and workflow runs at the same time."
                                                    },
                                                    "max_entries_to_merge": {
                                                        "maximum": 100,
                                                        "minimum": 0,
                                                        "type": "integer",
                                                        "description": "The maximum number of PRs that will be merged together in a group."
                                                    },
                                                    "merge_method": {
                                                        "enum": [
                                                            "MERGE",
                                                            "SQUASH",
                                                            "REBASE"
                                                        ],
                                                        "type": "string",
                                                        "description": "Method to use when merging changes from queued pull requests."
                                                    },
                                                    "min_entries_to_merge": {
                                                        "maximum": 100,
                                                        "minimum": 0,
                                                        "type": "integer",
                                                        "description": "The minimum number of PRs that will be merged together in a group."
                                                    },
                                                    "min_entries_to_merge_wait_minutes": {
                                                        "maximum": 360,
                                                        "minimum": 0,
                                                        "type": "integer",
                                                        "description": "The time merge queue should wait after the first PR is added to the queue for the minimum group size to be met. After this time has elapsed, the minimum group size will be ignored and a smaller group will be merged."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Merges must be performed via a merge queue."
                                    },
                                    {
                                        "title": "required_deployments",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "required_deployments"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "required_deployment_environments"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "required_deployment_environments": {
                                                        "type": "array",
                                                        "items": {
                                                            "type": "string"
                                                        },
                                                        "description": "The environments that must be successfully deployed to before branches can be merged."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Choose which environments must be successfully deployed to before refs can be pushed into a ref that matches this rule."
                                    },
                                    {
                                        "title": "required_signatures",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "required_signatures"
                                                ],
                                                "type": "string"
                                            }
                                        },
                                        "description": "Commits pushed to matching refs must have verified signatures."
                                    },
                                    {
                                        "title": "pull_request",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "pull_request"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "dismiss_stale_reviews_on_push",
                                                    "require_code_owner_review",
                                                    "require_last_push_approval",
                                                    "required_approving_review_count",
                                                    "required_review_thread_resolution"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "dismiss_stale_reviews_on_push": {
                                                        "type": "boolean",
                                                        "description": "New, reviewable commits pushed will dismiss previous pull request review approvals."
                                                    },
                                                    "require_code_owner_review": {
                                                        "type": "boolean",
                                                        "description": "Require an approving review in pull requests that modify files that have a designated code owner."
                                                    },
                                                    "require_last_push_approval": {
                                                        "type": "boolean",
                                                        "description": "Whether the most recent reviewable push must be approved by someone other than the person who pushed it."
                                                    },
                                                    "required_approving_review_count": {
                                                        "maximum": 10,
                                                        "minimum": 0,
                                                        "type": "integer",
                                                        "description": "The number of approving reviews that are required before a pull request can be merged."
                                                    },
                                                    "required_review_thread_resolution": {
                                                        "type": "boolean",
                                                        "description": "All conversations on code must be resolved before a pull request can be merged."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Require all commits be made to a non-target branch and submitted via a pull request before they can be merged."
                                    },
                                    {
                                        "title": "required_status_checks",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "required_status_checks"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "required_status_checks",
                                                    "strict_required_status_checks_policy"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "do_not_enforce_on_create": {
                                                        "type": "boolean",
                                                        "description": "Allow repositories and branches to be created if a check would otherwise prohibit it."
                                                    },
                                                    "required_status_checks": {
                                                        "type": "array",
                                                        "items": {
                                                            "title": "StatusCheckConfiguration",
                                                            "required": [
                                                                "context"
                                                            ],
                                                            "type": "object",
                                                            "properties": {
                                                                "context": {
                                                                    "type": "string",
                                                                    "description": "The status check context name that must be present on the commit."
                                                                },
                                                                "integration_id": {
                                                                    "type": "integer",
                                                                    "description": "The optional integration ID that this status check must originate from."
                                                                }
                                                            },
                                                            "description": "Required status check"
                                                        },
                                                        "description": "Status checks that are required."
                                                    },
                                                    "strict_required_status_checks_policy": {
                                                        "type": "boolean",
                                                        "description": "Whether pull requests targeting a matching branch must be tested with the latest code. This setting will not take effect unless at least one status check is enabled."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Choose which status checks must pass before the ref is updated. When enabled, commits must first be pushed to another ref where the checks pass."
                                    },
                                    {
                                        "title": "non_fast_forward",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "non_fast_forward"
                                                ],
                                                "type": "string"
                                            }
                                        },
                                        "description": "Prevent users with push access from force pushing to refs."
                                    },
                                    {
                                        "title": "commit_message_pattern",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "commit_message_pattern"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "operator",
                                                    "pattern"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "name": {
                                                        "type": "string",
                                                        "description": "How this rule will appear to users."
                                                    },
                                                    "negate": {
                                                        "type": "boolean",
                                                        "description": "If true, the rule will fail if the pattern matches."
                                                    },
                                                    "operator": {
                                                        "enum": [
                                                            "starts_with",
                                                            "ends_with",
                                                            "contains",
                                                            "regex"
                                                        ],
                                                        "type": "string",
                                                        "description": "The operator to use for matching."
                                                    },
                                                    "pattern": {
                                                        "type": "string",
                                                        "description": "The pattern to match with."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Parameters to be used for the commit_message_pattern rule"
                                    },
                                    {
                                        "title": "commit_author_email_pattern",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "commit_author_email_pattern"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "operator",
                                                    "pattern"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "name": {
                                                        "type": "string",
                                                        "description": "How this rule will appear to users."
                                                    },
                                                    "negate": {
                                                        "type": "boolean",
                                                        "description": "If true, the rule will fail if the pattern matches."
                                                    },
                                                    "operator": {
                                                        "enum": [
                                                            "starts_with",
                                                            "ends_with",
                                                            "contains",
                                                            "regex"
                                                        ],
                                                        "type": "string",
                                                        "description": "The operator to use for matching."
                                                    },
                                                    "pattern": {
                                                        "type": "string",
                                                        "description": "The pattern to match with."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Parameters to be used for the commit_author_email_pattern rule"
                                    },
                                    {
                                        "title": "committer_email_pattern",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "committer_email_pattern"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "operator",
                                                    "pattern"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "name": {
                                                        "type": "string",
                                                        "description": "How this rule will appear to users."
                                                    },
                                                    "negate": {
                                                        "type": "boolean",
                                                        "description": "If true, the rule will fail if the pattern matches."
                                                    },
                                                    "operator": {
                                                        "enum": [
                                                            "starts_with",
                                                            "ends_with",
                                                            "contains",
                                                            "regex"
                                                        ],
                                                        "type": "string",
                                                        "description": "The operator to use for matching."
                                                    },
                                                    "pattern": {
                                                        "type": "string",
                                                        "description": "The pattern to match with."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Parameters to be used for the committer_email_pattern rule"
                                    },
                                    {
                                        "title": "branch_name_pattern",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "branch_name_pattern"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "operator",
                                                    "pattern"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "name": {
                                                        "type": "string",
                                                        "description": "How this rule will appear to users."
                                                    },
                                                    "negate": {
                                                        "type": "boolean",
                                                        "description": "If true, the rule will fail if the pattern matches."
                                                    },
                                                    "operator": {
                                                        "enum": [
                                                            "starts_with",
                                                            "ends_with",
                                                            "contains",
                                                            "regex"
                                                        ],
                                                        "type": "string",
                                                        "description": "The operator to use for matching."
                                                    },
                                                    "pattern": {
                                                        "type": "string",
                                                        "description": "The pattern to match with."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Parameters to be used for the branch_name_pattern rule"
                                    },
                                    {
                                        "title": "tag_name_pattern",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "tag_name_pattern"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "operator",
                                                    "pattern"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "name": {
                                                        "type": "string",
                                                        "description": "How this rule will appear to users."
                                                    },
                                                    "negate": {
                                                        "type": "boolean",
                                                        "description": "If true, the rule will fail if the pattern matches."
                                                    },
                                                    "operator": {
                                                        "enum": [
                                                            "starts_with",
                                                            "ends_with",
                                                            "contains",
                                                            "regex"
                                                        ],
                                                        "type": "string",
                                                        "description": "The operator to use for matching."
                                                    },
                                                    "pattern": {
                                                        "type": "string",
                                                        "description": "The pattern to match with."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Parameters to be used for the tag_name_pattern rule"
                                    },
                                    {
                                        "title": "file_path_restriction",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "file_path_restriction"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "restricted_file_paths"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "restricted_file_paths": {
                                                        "type": "array",
                                                        "items": {
                                                            "type": "string"
                                                        },
                                                        "description": "The file paths that are restricted from being pushed to the commit graph."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "> [!NOTE]\\n> `file_path_restriction` is in beta and subject to change.\\n\\nPrevent commits that include changes in specified file paths from being pushed to the commit graph."
                                    },
                                    {
                                        "title": "max_file_path_length",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "max_file_path_length"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "max_file_path_length"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "max_file_path_length": {
                                                        "maximum": 256,
                                                        "minimum": 1,
                                                        "type": "integer",
                                                        "description": "The maximum amount of characters allowed in file paths"
                                                    }
                                                }
                                            }
                                        },
                                        "description": "> [!NOTE]\\n> `max_file_path_length` is in beta and subject to change.\\n\\nPrevent commits that include file paths that exceed a specified character limit from being pushed to the commit graph."
                                    },
                                    {
                                        "title": "file_extension_restriction",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "file_extension_restriction"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "restricted_file_extensions"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "restricted_file_extensions": {
                                                        "type": "array",
                                                        "items": {
                                                            "type": "string"
                                                        },
                                                        "description": "The file extensions that are restricted from being pushed to the commit graph."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "> [!NOTE]\\n> `file_extension_restriction` is in beta and subject to change.\\n\\nPrevent commits that include files with specified file extensions from being pushed to the commit graph."
                                    },
                                    {
                                        "title": "max_file_size",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "max_file_size"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "max_file_size"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "max_file_size": {
                                                        "maximum": 100,
                                                        "minimum": 1,
                                                        "type": "integer",
                                                        "description": "The maximum file size allowed in megabytes. This limit does not apply to Git Large File Storage (Git LFS)."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "> [!NOTE]\\n> `max_file_size` is in beta and subject to change.\\n\\nPrevent commits that exceed a specified file size limit from being pushed to the commit."
                                    },
                                    {
                                        "title": "workflows",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "workflows"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "workflows"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "do_not_enforce_on_create": {
                                                        "type": "boolean",
                                                        "description": "Allow repositories and branches to be created if a check would otherwise prohibit it."
                                                    },
                                                    "workflows": {
                                                        "type": "array",
                                                        "items": {
                                                            "title": "WorkflowFileReference",
                                                            "required": [
                                                                "path",
                                                                "repository_id"
                                                            ],
                                                            "type": "object",
                                                            "properties": {
                                                                "path": {
                                                                    "type": "string",
                                                                    "description": "The path to the workflow file"
                                                                },
                                                                "ref": {
                                                                    "type": "string",
                                                                    "description": "The ref (branch or tag) of the workflow file to use"
                                                                },
                                                                "repository_id": {
                                                                    "type": "integer",
                                                                    "description": "The ID of the repository where the workflow is defined"
                                                                },
                                                                "sha": {
                                                                    "type": "string",
                                                                    "description": "The commit SHA of the workflow file to use"
                                                                }
                                                            },
                                                            "description": "A workflow that must run for this rule to pass"
                                                        },
                                                        "description": "Workflows that must pass for this rule to pass."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Require all changes made to a targeted branch to pass the specified workflows before they can be merged."
                                    },
                                    {
                                        "title": "code_scanning",
                                        "required": [
                                            "type"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "type": {
                                                "enum": [
                                                    "code_scanning"
                                                ],
                                                "type": "string"
                                            },
                                            "parameters": {
                                                "required": [
                                                    "code_scanning_tools"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "code_scanning_tools": {
                                                        "type": "array",
                                                        "items": {
                                                            "title": "CodeScanningTool",
                                                            "required": [
                                                                "alerts_threshold",
                                                                "security_alerts_threshold",
                                                                "tool"
                                                            ],
                                                            "type": "object",
                                                            "properties": {
                                                                "alerts_threshold": {
                                                                    "enum": [
                                                                        "none",
                                                                        "errors",
                                                                        "errors_and_warnings",
                                                                        "all"
                                                                    ],
                                                                    "type": "string",
                                                                    "description": "The severity level at which code scanning results that raise alerts block a reference update. For more information on alert severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                                },
                                                                "security_alerts_threshold": {
                                                                    "enum": [
                                                                        "none",
                                                                        "critical",
                                                                        "high_or_higher",
                                                                        "medium_or_higher",
                                                                        "all"
                                                                    ],
                                                                    "type": "string",
                                                                    "description": "The severity level at which code scanning results that raise security alerts block a reference update. For more information on security severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                                },
                                                                "tool": {
                                                                    "type": "string",
                                                                    "description": "The name of a code scanning tool"
                                                                }
                                                            },
                                                            "description": "A tool that must provide code scanning results for this rule to pass."
                                                        },
                                                        "description": "Tools that must provide code scanning results for this rule to pass."
                                                    }
                                                }
                                            }
                                        },
                                        "description": "Choose which tools must provide code scanning results before the reference is updated. When configured, code scanning must be enabled and have results for both the commit and the reference being updated."
                                    }
                                ],
                                "description": "A repository rule."
                            }
                        },
                        "updated": {
                            "type": "array",
                            "items": {
                                "type": "object",
                                "properties": {
                                    "rule": {
                                        "title": "Repository Rule",
                                        "type": "object",
                                        "oneOf": [
                                            {
                                                "title": "creation",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "creation"
                                                        ],
                                                        "type": "string"
                                                    }
                                                },
                                                "description": "Only allow users with bypass permission to create matching refs."
                                            },
                                            {
                                                "title": "update",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "update"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "update_allows_fetch_and_merge"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "update_allows_fetch_and_merge": {
                                                                "type": "boolean",
                                                                "description": "Branch can pull changes from its upstream repository"
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "Only allow users with bypass permission to update matching refs."
                                            },
                                            {
                                                "title": "deletion",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "deletion"
                                                        ],
                                                        "type": "string"
                                                    }
                                                },
                                                "description": "Only allow users with bypass permissions to delete matching refs."
                                            },
                                            {
                                                "title": "required_linear_history",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "required_linear_history"
                                                        ],
                                                        "type": "string"
                                                    }
                                                },
                                                "description": "Prevent merge commits from being pushed to matching refs."
                                            },
                                            {
                                                "title": "merge_queue",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "merge_queue"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "check_response_timeout_minutes",
                                                            "grouping_strategy",
                                                            "max_entries_to_build",
                                                            "max_entries_to_merge",
                                                            "merge_method",
                                                            "min_entries_to_merge",
                                                            "min_entries_to_merge_wait_minutes"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "check_response_timeout_minutes": {
                                                                "maximum": 360,
                                                                "minimum": 1,
                                                                "type": "integer",
                                                                "description": "Maximum time for a required status check to report a conclusion. After this much time has elapsed, checks that have not reported a conclusion will be assumed to have failed"
                                                            },
                                                            "grouping_strategy": {
                                                                "enum": [
                                                                    "ALLGREEN",
                                                                    "HEADGREEN"
                                                                ],
                                                                "type": "string",
                                                                "description": "When set to ALLGREEN, the merge commit created by merge queue for each PR in the group must pass all required checks to merge. When set to HEADGREEN, only the commit at the head of the merge group, i.e. the commit containing changes from all of the PRs in the group, must pass its required checks to merge."
                                                            },
                                                            "max_entries_to_build": {
                                                                "maximum": 100,
                                                                "minimum": 0,
                                                                "type": "integer",
                                                                "description": "Limit the number of queued pull requests requesting checks and workflow runs at the same time."
                                                            },
                                                            "max_entries_to_merge": {
                                                                "maximum": 100,
                                                                "minimum": 0,
                                                                "type": "integer",
                                                                "description": "The maximum number of PRs that will be merged together in a group."
                                                            },
                                                            "merge_method": {
                                                                "enum": [
                                                                    "MERGE",
                                                                    "SQUASH",
                                                                    "REBASE"
                                                                ],
                                                                "type": "string",
                                                                "description": "Method to use when merging changes from queued pull requests."
                                                            },
                                                            "min_entries_to_merge": {
                                                                "maximum": 100,
                                                                "minimum": 0,
                                                                "type": "integer",
                                                                "description": "The minimum number of PRs that will be merged together in a group."
                                                            },
                                                            "min_entries_to_merge_wait_minutes": {
                                                                "maximum": 360,
                                                                "minimum": 0,
                                                                "type": "integer",
                                                                "description": "The time merge queue should wait after the first PR is added to the queue for the minimum group size to be met. After this time has elapsed, the minimum group size will be ignored and a smaller group will be merged."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "Merges must be performed via a merge queue."
                                            },
                                            {
                                                "title": "required_deployments",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "required_deployments"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "required_deployment_environments"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "required_deployment_environments": {
                                                                "type": "array",
                                                                "items": {
                                                                    "type": "string"
                                                                },
                                                                "description": "The environments that must be successfully deployed to before branches can be merged."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "Choose which environments must be successfully deployed to before refs can be pushed into a ref that matches this rule."
                                            },
                                            {
                                                "title": "required_signatures",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "required_signatures"
                                                        ],
                                                        "type": "string"
                                                    }
                                                },
                                                "description": "Commits pushed to matching refs must have verified signatures."
                                            },
                                            {
                                                "title": "pull_request",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "pull_request"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "dismiss_stale_reviews_on_push",
                                                            "require_code_owner_review",
                                                            "require_last_push_approval",
                                                            "required_approving_review_count",
                                                            "required_review_thread_resolution"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "dismiss_stale_reviews_on_push": {
                                                                "type": "boolean",
                                                                "description": "New, reviewable commits pushed will dismiss previous pull request review approvals."
                                                            },
                                                            "require_code_owner_review": {
                                                                "type": "boolean",
                                                                "description": "Require an approving review in pull requests that modify files that have a designated code owner."
                                                            },
                                                            "require_last_push_approval": {
                                                                "type": "boolean",
                                                                "description": "Whether the most recent reviewable push must be approved by someone other than the person who pushed it."
                                                            },
                                                            "required_approving_review_count": {
                                                                "maximum": 10,
                                                                "minimum": 0,
                                                                "type": "integer",
                                                                "description": "The number of approving reviews that are required before a pull request can be merged."
                                                            },
                                                            "required_review_thread_resolution": {
                                                                "type": "boolean",
                                                                "description": "All conversations on code must be resolved before a pull request can be merged."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "Require all commits be made to a non-target branch and submitted via a pull request before they can be merged."
                                            },
                                            {
                                                "title": "required_status_checks",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "required_status_checks"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "required_status_checks",
                                                            "strict_required_status_checks_policy"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "do_not_enforce_on_create": {
                                                                "type": "boolean",
                                                                "description": "Allow repositories and branches to be created if a check would otherwise prohibit it."
                                                            },
                                                            "required_status_checks": {
                                                                "type": "array",
                                                                "items": {
                                                                    "title": "StatusCheckConfiguration",
                                                                    "required": [
                                                                        "context"
                                                                    ],
                                                                    "type": "object",
                                                                    "properties": {
                                                                        "context": {
                                                                            "type": "string",
                                                                            "description": "The status check context name that must be present on the commit."
                                                                        },
                                                                        "integration_id": {
                                                                            "type": "integer",
                                                                            "description": "The optional integration ID that this status check must originate from."
                                                                        }
                                                                    },
                                                                    "description": "Required status check"
                                                                },
                                                                "description": "Status checks that are required."
                                                            },
                                                            "strict_required_status_checks_policy": {
                                                                "type": "boolean",
                                                                "description": "Whether pull requests targeting a matching branch must be tested with the latest code. This setting will not take effect unless at least one status check is enabled."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "Choose which status checks must pass before the ref is updated. When enabled, commits must first be pushed to another ref where the checks pass."
                                            },
                                            {
                                                "title": "non_fast_forward",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "non_fast_forward"
                                                        ],
                                                        "type": "string"
                                                    }
                                                },
                                                "description": "Prevent users with push access from force pushing to refs."
                                            },
                                            {
                                                "title": "commit_message_pattern",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "commit_message_pattern"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "operator",
                                                            "pattern"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "name": {
                                                                "type": "string",
                                                                "description": "How this rule will appear to users."
                                                            },
                                                            "negate": {
                                                                "type": "boolean",
                                                                "description": "If true, the rule will fail if the pattern matches."
                                                            },
                                                            "operator": {
                                                                "enum": [
                                                                    "starts_with",
                                                                    "ends_with",
                                                                    "contains",
                                                                    "regex"
                                                                ],
                                                                "type": "string",
                                                                "description": "The operator to use for matching."
                                                            },
                                                            "pattern": {
                                                                "type": "string",
                                                                "description": "The pattern to match with."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "Parameters to be used for the commit_message_pattern rule"
                                            },
                                            {
                                                "title": "commit_author_email_pattern",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "commit_author_email_pattern"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "operator",
                                                            "pattern"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "name": {
                                                                "type": "string",
                                                                "description": "How this rule will appear to users."
                                                            },
                                                            "negate": {
                                                                "type": "boolean",
                                                                "description": "If true, the rule will fail if the pattern matches."
                                                            },
                                                            "operator": {
                                                                "enum": [
                                                                    "starts_with",
                                                                    "ends_with",
                                                                    "contains",
                                                                    "regex"
                                                                ],
                                                                "type": "string",
                                                                "description": "The operator to use for matching."
                                                            },
                                                            "pattern": {
                                                                "type": "string",
                                                                "description": "The pattern to match with."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "Parameters to be used for the commit_author_email_pattern rule"
                                            },
                                            {
                                                "title": "committer_email_pattern",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "committer_email_pattern"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "operator",
                                                            "pattern"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "name": {
                                                                "type": "string",
                                                                "description": "How this rule will appear to users."
                                                            },
                                                            "negate": {
                                                                "type": "boolean",
                                                                "description": "If true, the rule will fail if the pattern matches."
                                                            },
                                                            "operator": {
                                                                "enum": [
                                                                    "starts_with",
                                                                    "ends_with",
                                                                    "contains",
                                                                    "regex"
                                                                ],
                                                                "type": "string",
                                                                "description": "The operator to use for matching."
                                                            },
                                                            "pattern": {
                                                                "type": "string",
                                                                "description": "The pattern to match with."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "Parameters to be used for the committer_email_pattern rule"
                                            },
                                            {
                                                "title": "branch_name_pattern",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "branch_name_pattern"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "operator",
                                                            "pattern"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "name": {
                                                                "type": "string",
                                                                "description": "How this rule will appear to users."
                                                            },
                                                            "negate": {
                                                                "type": "boolean",
                                                                "description": "If true, the rule will fail if the pattern matches."
                                                            },
                                                            "operator": {
                                                                "enum": [
                                                                    "starts_with",
                                                                    "ends_with",
                                                                    "contains",
                                                                    "regex"
                                                                ],
                                                                "type": "string",
                                                                "description": "The operator to use for matching."
                                                            },
                                                            "pattern": {
                                                                "type": "string",
                                                                "description": "The pattern to match with."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "Parameters to be used for the branch_name_pattern rule"
                                            },
                                            {
                                                "title": "tag_name_pattern",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "tag_name_pattern"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "operator",
                                                            "pattern"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "name": {
                                                                "type": "string",
                                                                "description": "How this rule will appear to users."
                                                            },
                                                            "negate": {
                                                                "type": "boolean",
                                                                "description": "If true, the rule will fail if the pattern matches."
                                                            },
                                                            "operator": {
                                                                "enum": [
                                                                    "starts_with",
                                                                    "ends_with",
                                                                    "contains",
                                                                    "regex"
                                                                ],
                                                                "type": "string",
                                                                "description": "The operator to use for matching."
                                                            },
                                                            "pattern": {
                                                                "type": "string",
                                                                "description": "The pattern to match with."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "Parameters to be used for the tag_name_pattern rule"
                                            },
                                            {
                                                "title": "file_path_restriction",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "file_path_restriction"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "restricted_file_paths"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "restricted_file_paths": {
                                                                "type": "array",
                                                                "items": {
                                                                    "type": "string"
                                                                },
                                                                "description": "The file paths that are restricted from being pushed to the commit graph."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "> [!NOTE]\\n> `file_path_restriction` is in beta and subject to change.\\n\\nPrevent commits that include changes in specified file paths from being pushed to the commit graph."
                                            },
                                            {
                                                "title": "max_file_path_length",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "max_file_path_length"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "max_file_path_length"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "max_file_path_length": {
                                                                "maximum": 256,
                                                                "minimum": 1,
                                                                "type": "integer",
                                                                "description": "The maximum amount of characters allowed in file paths"
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "> [!NOTE]\\n> `max_file_path_length` is in beta and subject to change.\\n\\nPrevent commits that include file paths that exceed a specified character limit from being pushed to the commit graph."
                                            },
                                            {
                                                "title": "file_extension_restriction",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "file_extension_restriction"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "restricted_file_extensions"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "restricted_file_extensions": {
                                                                "type": "array",
                                                                "items": {
                                                                    "type": "string"
                                                                },
                                                                "description": "The file extensions that are restricted from being pushed to the commit graph."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "> [!NOTE]\\n> `file_extension_restriction` is in beta and subject to change.\\n\\nPrevent commits that include files with specified file extensions from being pushed to the commit graph."
                                            },
                                            {
                                                "title": "max_file_size",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "max_file_size"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "max_file_size"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "max_file_size": {
                                                                "maximum": 100,
                                                                "minimum": 1,
                                                                "type": "integer",
                                                                "description": "The maximum file size allowed in megabytes. This limit does not apply to Git Large File Storage (Git LFS)."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "> [!NOTE]\\n> `max_file_size` is in beta and subject to change.\\n\\nPrevent commits that exceed a specified file size limit from being pushed to the commit."
                                            },
                                            {
                                                "title": "workflows",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "workflows"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "workflows"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "do_not_enforce_on_create": {
                                                                "type": "boolean",
                                                                "description": "Allow repositories and branches to be created if a check would otherwise prohibit it."
                                                            },
                                                            "workflows": {
                                                                "type": "array",
                                                                "items": {
                                                                    "title": "WorkflowFileReference",
                                                                    "required": [
                                                                        "path",
                                                                        "repository_id"
                                                                    ],
                                                                    "type": "object",
                                                                    "properties": {
                                                                        "path": {
                                                                            "type": "string",
                                                                            "description": "The path to the workflow file"
                                                                        },
                                                                        "ref": {
                                                                            "type": "string",
                                                                            "description": "The ref (branch or tag) of the workflow file to use"
                                                                        },
                                                                        "repository_id": {
                                                                            "type": "integer",
                                                                            "description": "The ID of the repository where the workflow is defined"
                                                                        },
                                                                        "sha": {
                                                                            "type": "string",
                                                                            "description": "The commit SHA of the workflow file to use"
                                                                        }
                                                                    },
                                                                    "description": "A workflow that must run for this rule to pass"
                                                                },
                                                                "description": "Workflows that must pass for this rule to pass."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "Require all changes made to a targeted branch to pass the specified workflows before they can be merged."
                                            },
                                            {
                                                "title": "code_scanning",
                                                "required": [
                                                    "type"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "type": {
                                                        "enum": [
                                                            "code_scanning"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "parameters": {
                                                        "required": [
                                                            "code_scanning_tools"
                                                        ],
                                                        "type": "object",
                                                        "properties": {
                                                            "code_scanning_tools": {
                                                                "type": "array",
                                                                "items": {
                                                                    "title": "CodeScanningTool",
                                                                    "required": [
                                                                        "alerts_threshold",
                                                                        "security_alerts_threshold",
                                                                        "tool"
                                                                    ],
                                                                    "type": "object",
                                                                    "properties": {
                                                                        "alerts_threshold": {
                                                                            "enum": [
                                                                                "none",
                                                                                "errors",
                                                                                "errors_and_warnings",
                                                                                "all"
                                                                            ],
                                                                            "type": "string",
                                                                            "description": "The severity level at which code scanning results that raise alerts block a reference update. For more information on alert severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                                        },
                                                                        "security_alerts_threshold": {
                                                                            "enum": [
                                                                                "none",
                                                                                "critical",
                                                                                "high_or_higher",
                                                                                "medium_or_higher",
                                                                                "all"
                                                                            ],
                                                                            "type": "string",
                                                                            "description": "The severity level at which code scanning results that raise security alerts block a reference update. For more information on security severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                                                        },
                                                                        "tool": {
                                                                            "type": "string",
                                                                            "description": "The name of a code scanning tool"
                                                                        }
                                                                    },
                                                                    "description": "A tool that must provide code scanning results for this rule to pass."
                                                                },
                                                                "description": "Tools that must provide code scanning results for this rule to pass."
                                                            }
                                                        }
                                                    }
                                                },
                                                "description": "Choose which tools must provide code scanning results before the reference is updated. When configured, code scanning must be enabled and have results for both the commit and the reference being updated."
                                            }
                                        ],
                                        "description": "A repository rule."
                                    },
                                    "changes": {
                                        "type": "object",
                                        "properties": {
                                            "configuration": {
                                                "type": "object",
                                                "properties": {
                                                    "from": {
                                                        "type": "string"
                                                    }
                                                }
                                            },
                                            "rule_type": {
                                                "type": "object",
                                                "properties": {
                                                    "from": {
                                                        "type": "string"
                                                    }
                                                }
                                            },
                                            "pattern": {
                                                "type": "object",
                                                "properties": {
                                                    "from": {
                                                        "type": "string"
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
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
        }
    }
}';
    public const SCHEMA_TITLE        = 'repository ruleset edited event';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "action": "edited",
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
        "id": 42,
        "node_id": "MDEwOlJlcG9zaXRvcnkxMjk2MjY5",
        "name": "Team Environment",
        "full_name": "octocat\\/Hello-World",
        "license": {
            "key": "mit",
            "name": "MIT License",
            "url": "https:\\/\\/api.github.com\\/licenses\\/mit",
            "spdx_id": "MIT",
            "node_id": "MDc6TGljZW5zZW1pdA==",
            "html_url": "https:\\/\\/example.com\\/"
        },
        "organization": {
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
        "forks": 5,
        "permissions": {
            "admin": false,
            "pull": false,
            "triage": false,
            "push": false,
            "maintain": false
        },
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
        "private": false,
        "html_url": "https:\\/\\/github.com\\/octocat\\/Hello-World",
        "description": "This your first repo!",
        "fork": false,
        "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World",
        "archive_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}",
        "assignees_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}",
        "blobs_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}",
        "branches_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}",
        "collaborators_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}",
        "comments_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}",
        "commits_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}",
        "compare_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}",
        "contents_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}",
        "contributors_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors",
        "deployments_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments",
        "downloads_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads",
        "events_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events",
        "forks_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks",
        "git_commits_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}",
        "git_refs_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}",
        "git_tags_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}",
        "git_url": "git:github.com\\/octocat\\/Hello-World.git",
        "issue_comment_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}",
        "issue_events_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}",
        "issues_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}",
        "keys_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}",
        "labels_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}",
        "languages_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages",
        "merges_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges",
        "milestones_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}",
        "notifications_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}",
        "pulls_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}",
        "releases_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}",
        "ssh_url": "git@github.com:octocat\\/Hello-World.git",
        "stargazers_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers",
        "statuses_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}",
        "subscribers_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers",
        "subscription_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription",
        "tags_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags",
        "teams_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams",
        "trees_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}",
        "clone_url": "https:\\/\\/github.com\\/octocat\\/Hello-World.git",
        "mirror_url": "git:git.example.com\\/octocat\\/Hello-World",
        "hooks_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks",
        "svn_url": "https:\\/\\/svn.github.com\\/octocat\\/Hello-World",
        "homepage": "https:\\/\\/github.com",
        "language": "generated",
        "forks_count": 9,
        "stargazers_count": 80,
        "watchers_count": 80,
        "size": 108,
        "default_branch": "master",
        "open_issues_count": 0,
        "is_template": true,
        "topics": [
            "generated",
            "generated"
        ],
        "custom_properties": [],
        "has_issues": true,
        "has_projects": true,
        "has_wiki": true,
        "has_pages": false,
        "has_downloads": true,
        "has_discussions": true,
        "archived": false,
        "disabled": false,
        "visibility": "generated",
        "pushed_at": "2011-01-26T19:06:43Z",
        "created_at": "2011-01-26T19:01:12Z",
        "updated_at": "2011-01-26T19:14:43Z",
        "allow_rebase_merge": true,
        "template_repository": {
            "id": 2,
            "node_id": "generated",
            "name": "generated",
            "full_name": "generated",
            "owner": {
                "login": "generated",
                "id": 2,
                "node_id": "generated",
                "avatar_url": "generated",
                "gravatar_id": "generated",
                "url": "generated",
                "html_url": "generated",
                "followers_url": "generated",
                "following_url": "generated",
                "gists_url": "generated",
                "starred_url": "generated",
                "subscriptions_url": "generated",
                "organizations_url": "generated",
                "repos_url": "generated",
                "events_url": "generated",
                "received_events_url": "generated",
                "type": "generated",
                "site_admin": false
            },
            "private": false,
            "html_url": "generated",
            "description": "generated",
            "fork": false,
            "url": "generated",
            "archive_url": "generated",
            "assignees_url": "generated",
            "blobs_url": "generated",
            "branches_url": "generated",
            "collaborators_url": "generated",
            "comments_url": "generated",
            "commits_url": "generated",
            "compare_url": "generated",
            "contents_url": "generated",
            "contributors_url": "generated",
            "deployments_url": "generated",
            "downloads_url": "generated",
            "events_url": "generated",
            "forks_url": "generated",
            "git_commits_url": "generated",
            "git_refs_url": "generated",
            "git_tags_url": "generated",
            "git_url": "generated",
            "issue_comment_url": "generated",
            "issue_events_url": "generated",
            "issues_url": "generated",
            "keys_url": "generated",
            "labels_url": "generated",
            "languages_url": "generated",
            "merges_url": "generated",
            "milestones_url": "generated",
            "notifications_url": "generated",
            "pulls_url": "generated",
            "releases_url": "generated",
            "ssh_url": "generated",
            "stargazers_url": "generated",
            "statuses_url": "generated",
            "subscribers_url": "generated",
            "subscription_url": "generated",
            "tags_url": "generated",
            "teams_url": "generated",
            "trees_url": "generated",
            "clone_url": "generated",
            "mirror_url": "generated",
            "hooks_url": "generated",
            "svn_url": "generated",
            "homepage": "generated",
            "language": "generated",
            "forks_count": 11,
            "stargazers_count": 16,
            "watchers_count": 14,
            "size": 4,
            "default_branch": "generated",
            "open_issues_count": 17,
            "is_template": false,
            "topics": [
                "generated",
                "generated"
            ],
            "has_issues": false,
            "has_projects": false,
            "has_wiki": false,
            "has_pages": false,
            "has_downloads": false,
            "archived": false,
            "disabled": false,
            "visibility": "generated",
            "pushed_at": "generated",
            "created_at": "generated",
            "updated_at": "generated",
            "permissions": {
                "admin": false,
                "maintain": false,
                "push": false,
                "triage": false,
                "pull": false
            },
            "allow_rebase_merge": false,
            "temp_clone_token": "generated",
            "allow_squash_merge": false,
            "allow_auto_merge": false,
            "delete_branch_on_merge": false,
            "allow_update_branch": false,
            "use_squash_pr_title_as_default": false,
            "squash_merge_commit_title": "PR_TITLE",
            "squash_merge_commit_message": "PR_BODY",
            "merge_commit_title": "MERGE_MESSAGE",
            "merge_commit_message": "BLANK",
            "allow_merge_commit": false,
            "subscribers_count": 17,
            "network_count": 13
        },
        "temp_clone_token": "generated",
        "allow_squash_merge": true,
        "allow_auto_merge": false,
        "delete_branch_on_merge": false,
        "allow_update_branch": false,
        "use_squash_pr_title_as_default": false,
        "squash_merge_commit_title": "PR_TITLE",
        "squash_merge_commit_message": "PR_BODY",
        "merge_commit_title": "MERGE_MESSAGE",
        "merge_commit_message": "BLANK",
        "allow_merge_commit": true,
        "allow_forking": false,
        "web_commit_signoff_required": false,
        "subscribers_count": 17,
        "network_count": 13,
        "open_issues": 11,
        "watchers": 8,
        "master_branch": "generated",
        "starred_at": "\\"2020-07-09T00:17:42Z\\"",
        "anonymous_access_enabled": false
    },
    "repository_ruleset": {
        "id": 2,
        "name": "generated",
        "target": "push",
        "source_type": "Repository",
        "source": "generated",
        "enforcement": "disabled",
        "bypass_actors": [
            {
                "actor_id": 8,
                "actor_type": "DeployKey",
                "bypass_mode": "always"
            },
            {
                "actor_id": 8,
                "actor_type": "DeployKey",
                "bypass_mode": "always"
            }
        ],
        "current_user_can_bypass": "always",
        "node_id": "generated",
        "_links": {
            "self": {
                "href": "generated"
            },
            "html": {
                "href": "generated"
            }
        },
        "conditions": null,
        "rules": [
            null,
            null
        ],
        "created_at": "1970-01-01T00:00:00+00:00",
        "updated_at": "1970-01-01T00:00:00+00:00"
    },
    "changes": {
        "name": {
            "from": "generated"
        },
        "enforcement": {
            "from": "generated"
        },
        "conditions": {
            "added": [
                {
                    "ref_name": {
                        "include": [
                            "generated",
                            "generated"
                        ],
                        "exclude": [
                            "generated",
                            "generated"
                        ]
                    }
                },
                {
                    "ref_name": {
                        "include": [
                            "generated",
                            "generated"
                        ],
                        "exclude": [
                            "generated",
                            "generated"
                        ]
                    }
                }
            ],
            "deleted": [
                {
                    "ref_name": {
                        "include": [
                            "generated",
                            "generated"
                        ],
                        "exclude": [
                            "generated",
                            "generated"
                        ]
                    }
                },
                {
                    "ref_name": {
                        "include": [
                            "generated",
                            "generated"
                        ],
                        "exclude": [
                            "generated",
                            "generated"
                        ]
                    }
                }
            ],
            "updated": [
                {
                    "condition": {
                        "ref_name": {
                            "include": [
                                "generated",
                                "generated"
                            ],
                            "exclude": [
                                "generated",
                                "generated"
                            ]
                        }
                    },
                    "changes": {
                        "condition_type": {
                            "from": "generated"
                        },
                        "target": {
                            "from": "generated"
                        },
                        "include": {
                            "from": [
                                "generated",
                                "generated"
                            ]
                        },
                        "exclude": {
                            "from": [
                                "generated",
                                "generated"
                            ]
                        }
                    }
                },
                {
                    "condition": {
                        "ref_name": {
                            "include": [
                                "generated",
                                "generated"
                            ],
                            "exclude": [
                                "generated",
                                "generated"
                            ]
                        }
                    },
                    "changes": {
                        "condition_type": {
                            "from": "generated"
                        },
                        "target": {
                            "from": "generated"
                        },
                        "include": {
                            "from": [
                                "generated",
                                "generated"
                            ]
                        },
                        "exclude": {
                            "from": [
                                "generated",
                                "generated"
                            ]
                        }
                    }
                }
            ]
        },
        "rules": {
            "added": [
                null,
                null
            ],
            "deleted": [
                null,
                null
            ],
            "updated": [
                {
                    "rule": null,
                    "changes": {
                        "configuration": {
                            "from": "generated"
                        },
                        "rule_type": {
                            "from": "generated"
                        },
                        "pattern": {
                            "from": "generated"
                        }
                    }
                },
                {
                    "rule": null,
                    "changes": {
                        "configuration": {
                            "from": "generated"
                        },
                        "rule_type": {
                            "from": "generated"
                        },
                        "pattern": {
                            "from": "generated"
                        }
                    }
                }
            ]
        }
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
    }
}';

    /**
     * enterprise: An enterprise on GitHub. Webhook payloads contain the `enterprise` property when the webhook is configured
    on an enterprise account or an organization that's part of an enterprise account. For more information,
    see "[About enterprise accounts](https://docs.github.com/admin/overview/about-enterprise-accounts)."
     * installation: The GitHub App installation. Webhook payloads contain the `installation` property when the event is configured
    for and sent to a GitHub App. For more information,
    see "[Using webhooks with GitHub Apps](https://docs.github.com/apps/creating-github-apps/registering-a-github-app/using-webhooks-with-github-apps)."
     * organization: A GitHub organization. Webhook payloads contain the `organization` property when the webhook is configured for an
    organization, or when the event occurs from activity in a repository owned by an organization.
     * repository: The repository on GitHub where the event occurred. Webhook payloads contain the `repository` property
    when the event occurs from activity in a repository.
     * repositoryRuleset: A set of rules to apply when specified conditions are met.
     * sender: The GitHub user that triggered the event. This property is included in every webhook payload.
     */
    public function __construct(public string $action, public Schema\EnterpriseWebhooks|null $enterprise, public Schema\SimpleInstallation|null $installation, public Schema\OrganizationSimpleWebhooks|null $organization, public Schema\RepositoryWebhooks|null $repository, #[MapFrom('repository_ruleset')]
    public Schema\RepositoryRuleset $repositoryRuleset, public Schema\WebhookRepositoryRulesetEdited\Changes|null $changes, public Schema\SimpleUserWebhooks $sender,)
    {
    }
}
