<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Migration
{
    public const SCHEMA_JSON         = '{
    "title": "Migration",
    "required": [
        "id",
        "node_id",
        "owner",
        "guid",
        "state",
        "lock_repositories",
        "exclude_metadata",
        "exclude_git_data",
        "exclude_attachments",
        "exclude_releases",
        "exclude_owner_projects",
        "org_metadata_only",
        "repositories",
        "url",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "format": "int64",
            "examples": [
                79
            ]
        },
        "owner": {
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
        "guid": {
            "type": "string",
            "examples": [
                "0b989ba4-242f-11e5-81e1-c7b6966d2516"
            ]
        },
        "state": {
            "type": "string",
            "examples": [
                "pending"
            ]
        },
        "lock_repositories": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "exclude_metadata": {
            "type": "boolean"
        },
        "exclude_git_data": {
            "type": "boolean"
        },
        "exclude_attachments": {
            "type": "boolean"
        },
        "exclude_releases": {
            "type": "boolean"
        },
        "exclude_owner_projects": {
            "type": "boolean"
        },
        "org_metadata_only": {
            "type": "boolean"
        },
        "repositories": {
            "type": "array",
            "items": {
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
                        "deprecated": true,
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
                "description": "A repository on GitHub."
            },
            "description": "The repositories included in the migration. Only returned for export migrations."
        },
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/octo-org\\/migrations\\/79"
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2015-07-06T15:33:38-07:00"
            ]
        },
        "updated_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2015-07-06T15:33:38-07:00"
            ]
        },
        "node_id": {
            "type": "string"
        },
        "archive_url": {
            "type": "string",
            "format": "uri"
        },
        "exclude": {
            "type": "array",
            "items": {
                "type": "string",
                "description": "Allowed values that can be passed to the exclude parameter. The array can include any of: `\\"repositories\\"`."
            },
            "description": "Exclude related items from being returned in the response in order to improve performance of the request. The array can include any of: `\\"repositories\\"`."
        }
    },
    "description": "A migration."
}';
    public const SCHEMA_TITLE        = 'Migration';
    public const SCHEMA_DESCRIPTION  = 'A migration.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 79,
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
    "guid": "0b989ba4-242f-11e5-81e1-c7b6966d2516",
    "state": "pending",
    "lock_repositories": true,
    "exclude_metadata": false,
    "exclude_git_data": false,
    "exclude_attachments": false,
    "exclude_releases": false,
    "exclude_owner_projects": false,
    "org_metadata_only": false,
    "repositories": [
        {
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
            "open_issues": 11,
            "watchers": 8,
            "master_branch": "generated",
            "starred_at": "\\"2020-07-09T00:17:42Z\\"",
            "anonymous_access_enabled": false
        },
        {
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
            "open_issues": 11,
            "watchers": 8,
            "master_branch": "generated",
            "starred_at": "\\"2020-07-09T00:17:42Z\\"",
            "anonymous_access_enabled": false
        }
    ],
    "url": "https:\\/\\/api.github.com\\/orgs\\/octo-org\\/migrations\\/79",
    "created_at": "2015-07-06T15:33:38-07:00",
    "updated_at": "2015-07-06T15:33:38-07:00",
    "node_id": "generated",
    "archive_url": "https:\\/\\/example.com\\/",
    "exclude": [
        "generated",
        "generated"
    ]
}';

    /**
     * repositories: The repositories included in the migration. Only returned for export migrations.
     * exclude: Exclude related items from being returned in the response in order to improve performance of the request. The array can include any of: `"repositories"`.
     */
    public function __construct(public int $id, public Schema\SimpleUser|null $owner, public string $guid, public string $state, #[MapFrom('lock_repositories')]
    public bool $lockRepositories, #[MapFrom('exclude_metadata')]
    public bool $excludeMetadata, #[MapFrom('exclude_git_data')]
    public bool $excludeGitData, #[MapFrom('exclude_attachments')]
    public bool $excludeAttachments, #[MapFrom('exclude_releases')]
    public bool $excludeReleases, #[MapFrom('exclude_owner_projects')]
    public bool $excludeOwnerProjects, #[MapFrom('org_metadata_only')]
    public bool $orgMetadataOnly, public array $repositories, public string $url, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('archive_url')]
    public string|null $archiveUrl, public array|null $exclude,)
    {
    }
}
