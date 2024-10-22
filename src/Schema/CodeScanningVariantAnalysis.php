<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningVariantAnalysis
{
    public const SCHEMA_JSON         = '{
    "title": "Variant Analysis",
    "required": [
        "id",
        "controller_repo",
        "actor",
        "query_language",
        "query_pack_url",
        "status"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The ID of the variant analysis."
        },
        "controller_repo": {
            "title": "Simple Repository",
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
                "url"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "description": "A unique identifier of the repository.",
                    "format": "int64",
                    "examples": [
                        1296269
                    ]
                },
                "node_id": {
                    "type": "string",
                    "description": "The GraphQL identifier of the repository.",
                    "examples": [
                        "MDEwOlJlcG9zaXRvcnkxMjk2MjY5"
                    ]
                },
                "name": {
                    "type": "string",
                    "description": "The name of the repository.",
                    "examples": [
                        "Hello-World"
                    ]
                },
                "full_name": {
                    "type": "string",
                    "description": "The full, globally unique, name of the repository.",
                    "examples": [
                        "octocat\\/Hello-World"
                    ]
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
                        },
                        "user_view_type": {
                            "type": "string",
                            "examples": [
                                "public"
                            ]
                        }
                    },
                    "description": "A GitHub user."
                },
                "private": {
                    "type": "boolean",
                    "description": "Whether the repository is private."
                },
                "html_url": {
                    "type": "string",
                    "description": "The URL to view the repository on GitHub.com.",
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
                    "description": "The repository description.",
                    "examples": [
                        "This your first repo!"
                    ]
                },
                "fork": {
                    "type": "boolean",
                    "description": "Whether the repository is a fork."
                },
                "url": {
                    "type": "string",
                    "description": "The URL to get more information about the repository from the GitHub API.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"
                    ]
                },
                "archive_url": {
                    "type": "string",
                    "description": "A template for the API URL to download the repository as an archive.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"
                    ]
                },
                "assignees_url": {
                    "type": "string",
                    "description": "A template for the API URL to list the available assignees for issues in the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"
                    ]
                },
                "blobs_url": {
                    "type": "string",
                    "description": "A template for the API URL to create or retrieve a raw Git blob in the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"
                    ]
                },
                "branches_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about branches in the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"
                    ]
                },
                "collaborators_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about collaborators of the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"
                    ]
                },
                "comments_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about comments on the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"
                    ]
                },
                "commits_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about commits on the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"
                    ]
                },
                "compare_url": {
                    "type": "string",
                    "description": "A template for the API URL to compare two commits or refs.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"
                    ]
                },
                "contents_url": {
                    "type": "string",
                    "description": "A template for the API URL to get the contents of the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"
                    ]
                },
                "contributors_url": {
                    "type": "string",
                    "description": "A template for the API URL to list the contributors to the repository.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"
                    ]
                },
                "deployments_url": {
                    "type": "string",
                    "description": "The API URL to list the deployments of the repository.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"
                    ]
                },
                "downloads_url": {
                    "type": "string",
                    "description": "The API URL to list the downloads on the repository.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"
                    ]
                },
                "events_url": {
                    "type": "string",
                    "description": "The API URL to list the events of the repository.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"
                    ]
                },
                "forks_url": {
                    "type": "string",
                    "description": "The API URL to list the forks of the repository.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"
                    ]
                },
                "git_commits_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about Git commits of the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"
                    ]
                },
                "git_refs_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about Git refs of the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"
                    ]
                },
                "git_tags_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about Git tags of the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"
                    ]
                },
                "issue_comment_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about issue comments on the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"
                    ]
                },
                "issue_events_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about issue events on the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"
                    ]
                },
                "issues_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about issues on the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"
                    ]
                },
                "keys_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about deploy keys on the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"
                    ]
                },
                "labels_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about labels of the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"
                    ]
                },
                "languages_url": {
                    "type": "string",
                    "description": "The API URL to get information about the languages of the repository.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"
                    ]
                },
                "merges_url": {
                    "type": "string",
                    "description": "The API URL to merge branches in the repository.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"
                    ]
                },
                "milestones_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about milestones of the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"
                    ]
                },
                "notifications_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about notifications on the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"
                    ]
                },
                "pulls_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about pull requests on the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"
                    ]
                },
                "releases_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about releases on the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"
                    ]
                },
                "stargazers_url": {
                    "type": "string",
                    "description": "The API URL to list the stargazers on the repository.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"
                    ]
                },
                "statuses_url": {
                    "type": "string",
                    "description": "A template for the API URL to get information about statuses of a commit.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"
                    ]
                },
                "subscribers_url": {
                    "type": "string",
                    "description": "The API URL to list the subscribers on the repository.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"
                    ]
                },
                "subscription_url": {
                    "type": "string",
                    "description": "The API URL to subscribe to notifications for this repository.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"
                    ]
                },
                "tags_url": {
                    "type": "string",
                    "description": "The API URL to get information about tags on the repository.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"
                    ]
                },
                "teams_url": {
                    "type": "string",
                    "description": "The API URL to list the teams on the repository.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"
                    ]
                },
                "trees_url": {
                    "type": "string",
                    "description": "A template for the API URL to create or retrieve a raw Git tree of the repository.",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"
                    ]
                },
                "hooks_url": {
                    "type": "string",
                    "description": "The API URL to list the hooks on the repository.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"
                    ]
                }
            },
            "description": "A GitHub repository."
        },
        "actor": {
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
        },
        "query_language": {
            "enum": [
                "cpp",
                "csharp",
                "go",
                "java",
                "javascript",
                "python",
                "ruby",
                "swift"
            ],
            "type": "string",
            "description": "The language targeted by the CodeQL query"
        },
        "query_pack_url": {
            "type": "string",
            "description": "The download url for the query pack."
        },
        "created_at": {
            "type": "string",
            "description": "The date and time at which the variant analysis was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.",
            "format": "date-time"
        },
        "updated_at": {
            "type": "string",
            "description": "The date and time at which the variant analysis was last updated, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.",
            "format": "date-time"
        },
        "completed_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The date and time at which the variant analysis was completed, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ. Will be null if the variant analysis has not yet completed or this information is not available.",
            "format": "date-time"
        },
        "status": {
            "enum": [
                "in_progress",
                "succeeded",
                "failed",
                "cancelled"
            ],
            "type": "string"
        },
        "actions_workflow_run_id": {
            "type": "integer",
            "description": "The GitHub Actions workflow run used to execute this variant analysis. This is only available if the workflow run has started."
        },
        "failure_reason": {
            "enum": [
                "no_repos_queried",
                "actions_workflow_run_failed",
                "internal_error"
            ],
            "type": "string",
            "description": "The reason for a failure of the variant analysis. This is only available if the variant analysis has failed."
        },
        "scanned_repositories": {
            "type": "array",
            "items": {
                "required": [
                    "repository",
                    "analysis_status"
                ],
                "type": "object",
                "properties": {
                    "repository": {
                        "title": "Repository Identifier",
                        "required": [
                            "full_name",
                            "id",
                            "name",
                            "private",
                            "stargazers_count",
                            "updated_at"
                        ],
                        "type": "object",
                        "properties": {
                            "id": {
                                "type": "integer",
                                "description": "A unique identifier of the repository.",
                                "examples": [
                                    1296269
                                ]
                            },
                            "name": {
                                "type": "string",
                                "description": "The name of the repository.",
                                "examples": [
                                    "Hello-World"
                                ]
                            },
                            "full_name": {
                                "type": "string",
                                "description": "The full, globally unique, name of the repository.",
                                "examples": [
                                    "octocat\\/Hello-World"
                                ]
                            },
                            "private": {
                                "type": "boolean",
                                "description": "Whether the repository is private."
                            },
                            "stargazers_count": {
                                "type": "integer",
                                "examples": [
                                    80
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
                            }
                        },
                        "description": "Repository Identifier"
                    },
                    "analysis_status": {
                        "enum": [
                            "pending",
                            "in_progress",
                            "succeeded",
                            "failed",
                            "canceled",
                            "timed_out"
                        ],
                        "type": "string",
                        "description": "The new status of the CodeQL variant analysis repository task."
                    },
                    "result_count": {
                        "type": "integer",
                        "description": "The number of results in the case of a successful analysis. This is only available for successful analyses."
                    },
                    "artifact_size_in_bytes": {
                        "type": "integer",
                        "description": "The size of the artifact. This is only available for successful analyses."
                    },
                    "failure_message": {
                        "type": "string",
                        "description": "The reason of the failure of this repo task. This is only available if the repository task has failed."
                    }
                }
            }
        },
        "skipped_repositories": {
            "required": [
                "access_mismatch_repos",
                "not_found_repos",
                "no_codeql_db_repos",
                "over_limit_repos"
            ],
            "type": "object",
            "properties": {
                "access_mismatch_repos": {
                    "required": [
                        "repository_count",
                        "repositories"
                    ],
                    "type": "object",
                    "properties": {
                        "repository_count": {
                            "type": "integer",
                            "description": "The total number of repositories that were skipped for this reason.",
                            "examples": [
                                2
                            ]
                        },
                        "repositories": {
                            "type": "array",
                            "items": {
                                "title": "Repository Identifier",
                                "required": [
                                    "full_name",
                                    "id",
                                    "name",
                                    "private",
                                    "stargazers_count",
                                    "updated_at"
                                ],
                                "type": "object",
                                "properties": {
                                    "id": {
                                        "type": "integer",
                                        "description": "A unique identifier of the repository.",
                                        "examples": [
                                            1296269
                                        ]
                                    },
                                    "name": {
                                        "type": "string",
                                        "description": "The name of the repository.",
                                        "examples": [
                                            "Hello-World"
                                        ]
                                    },
                                    "full_name": {
                                        "type": "string",
                                        "description": "The full, globally unique, name of the repository.",
                                        "examples": [
                                            "octocat\\/Hello-World"
                                        ]
                                    },
                                    "private": {
                                        "type": "boolean",
                                        "description": "Whether the repository is private."
                                    },
                                    "stargazers_count": {
                                        "type": "integer",
                                        "examples": [
                                            80
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
                                    }
                                },
                                "description": "Repository Identifier"
                            },
                            "description": "A list of repositories that were skipped. This list may not include all repositories that were skipped. This is only available when the repository was found and the user has access to it."
                        }
                    }
                },
                "not_found_repos": {
                    "required": [
                        "repository_count",
                        "repository_full_names"
                    ],
                    "type": "object",
                    "properties": {
                        "repository_count": {
                            "type": "integer",
                            "description": "The total number of repositories that were skipped for this reason.",
                            "examples": [
                                2
                            ]
                        },
                        "repository_full_names": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "description": "A list of full repository names that were skipped. This list may not include all repositories that were skipped."
                        }
                    }
                },
                "no_codeql_db_repos": {
                    "required": [
                        "repository_count",
                        "repositories"
                    ],
                    "type": "object",
                    "properties": {
                        "repository_count": {
                            "type": "integer",
                            "description": "The total number of repositories that were skipped for this reason.",
                            "examples": [
                                2
                            ]
                        },
                        "repositories": {
                            "type": "array",
                            "items": {
                                "title": "Repository Identifier",
                                "required": [
                                    "full_name",
                                    "id",
                                    "name",
                                    "private",
                                    "stargazers_count",
                                    "updated_at"
                                ],
                                "type": "object",
                                "properties": {
                                    "id": {
                                        "type": "integer",
                                        "description": "A unique identifier of the repository.",
                                        "examples": [
                                            1296269
                                        ]
                                    },
                                    "name": {
                                        "type": "string",
                                        "description": "The name of the repository.",
                                        "examples": [
                                            "Hello-World"
                                        ]
                                    },
                                    "full_name": {
                                        "type": "string",
                                        "description": "The full, globally unique, name of the repository.",
                                        "examples": [
                                            "octocat\\/Hello-World"
                                        ]
                                    },
                                    "private": {
                                        "type": "boolean",
                                        "description": "Whether the repository is private."
                                    },
                                    "stargazers_count": {
                                        "type": "integer",
                                        "examples": [
                                            80
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
                                    }
                                },
                                "description": "Repository Identifier"
                            },
                            "description": "A list of repositories that were skipped. This list may not include all repositories that were skipped. This is only available when the repository was found and the user has access to it."
                        }
                    }
                },
                "over_limit_repos": {
                    "required": [
                        "repository_count",
                        "repositories"
                    ],
                    "type": "object",
                    "properties": {
                        "repository_count": {
                            "type": "integer",
                            "description": "The total number of repositories that were skipped for this reason.",
                            "examples": [
                                2
                            ]
                        },
                        "repositories": {
                            "type": "array",
                            "items": {
                                "title": "Repository Identifier",
                                "required": [
                                    "full_name",
                                    "id",
                                    "name",
                                    "private",
                                    "stargazers_count",
                                    "updated_at"
                                ],
                                "type": "object",
                                "properties": {
                                    "id": {
                                        "type": "integer",
                                        "description": "A unique identifier of the repository.",
                                        "examples": [
                                            1296269
                                        ]
                                    },
                                    "name": {
                                        "type": "string",
                                        "description": "The name of the repository.",
                                        "examples": [
                                            "Hello-World"
                                        ]
                                    },
                                    "full_name": {
                                        "type": "string",
                                        "description": "The full, globally unique, name of the repository.",
                                        "examples": [
                                            "octocat\\/Hello-World"
                                        ]
                                    },
                                    "private": {
                                        "type": "boolean",
                                        "description": "Whether the repository is private."
                                    },
                                    "stargazers_count": {
                                        "type": "integer",
                                        "examples": [
                                            80
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
                                    }
                                },
                                "description": "Repository Identifier"
                            },
                            "description": "A list of repositories that were skipped. This list may not include all repositories that were skipped. This is only available when the repository was found and the user has access to it."
                        }
                    }
                }
            },
            "description": "Information about repositories that were skipped from processing. This information is only available to the user that initiated the variant analysis."
        }
    },
    "description": "A run of a CodeQL query against one or more repositories."
}';
    public const SCHEMA_TITLE        = 'Variant Analysis';
    public const SCHEMA_DESCRIPTION  = 'A run of a CodeQL query against one or more repositories.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "controller_repo": {
        "id": 1296269,
        "node_id": "MDEwOlJlcG9zaXRvcnkxMjk2MjY5",
        "name": "Hello-World",
        "full_name": "octocat\\/Hello-World",
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
            "starred_at": "\\"2020-07-09T00:17:55Z\\"",
            "user_view_type": "public"
        },
        "private": false,
        "html_url": "https:\\/\\/github.com\\/octocat\\/Hello-World",
        "description": "This your first repo!",
        "fork": false,
        "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World",
        "archive_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}",
        "assignees_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}",
        "blobs_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}",
        "branches_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}",
        "collaborators_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}",
        "comments_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}",
        "commits_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}",
        "compare_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}",
        "contents_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}",
        "contributors_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors",
        "deployments_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments",
        "downloads_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads",
        "events_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events",
        "forks_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks",
        "git_commits_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}",
        "git_refs_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}",
        "git_tags_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}",
        "issue_comment_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}",
        "issue_events_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}",
        "issues_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}",
        "keys_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}",
        "labels_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}",
        "languages_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages",
        "merges_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges",
        "milestones_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}",
        "notifications_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}",
        "pulls_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}",
        "releases_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}",
        "stargazers_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers",
        "statuses_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}",
        "subscribers_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers",
        "subscription_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription",
        "tags_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags",
        "teams_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams",
        "trees_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}",
        "hooks_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"
    },
    "actor": {
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
    "query_language": "swift",
    "query_pack_url": "generated",
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "completed_at": "1970-01-01T00:00:00+00:00",
    "status": "cancelled",
    "actions_workflow_run_id": 23,
    "failure_reason": "internal_error",
    "scanned_repositories": [
        {
            "repository": {
                "id": 1296269,
                "name": "Hello-World",
                "full_name": "octocat\\/Hello-World",
                "private": false,
                "stargazers_count": 80,
                "updated_at": "2011-01-26T19:14:43Z"
            },
            "analysis_status": "pending",
            "result_count": 12,
            "artifact_size_in_bytes": 22,
            "failure_message": "generated"
        },
        {
            "repository": {
                "id": 1296269,
                "name": "Hello-World",
                "full_name": "octocat\\/Hello-World",
                "private": false,
                "stargazers_count": 80,
                "updated_at": "2011-01-26T19:14:43Z"
            },
            "analysis_status": "pending",
            "result_count": 12,
            "artifact_size_in_bytes": 22,
            "failure_message": "generated"
        }
    ],
    "skipped_repositories": {
        "access_mismatch_repos": {
            "repository_count": 2,
            "repositories": [
                {
                    "id": 1296269,
                    "name": "Hello-World",
                    "full_name": "octocat\\/Hello-World",
                    "private": false,
                    "stargazers_count": 80,
                    "updated_at": "2011-01-26T19:14:43Z"
                },
                {
                    "id": 1296269,
                    "name": "Hello-World",
                    "full_name": "octocat\\/Hello-World",
                    "private": false,
                    "stargazers_count": 80,
                    "updated_at": "2011-01-26T19:14:43Z"
                }
            ]
        },
        "not_found_repos": {
            "repository_count": 2,
            "repository_full_names": [
                "generated",
                "generated"
            ]
        },
        "no_codeql_db_repos": {
            "repository_count": 2,
            "repositories": [
                {
                    "id": 1296269,
                    "name": "Hello-World",
                    "full_name": "octocat\\/Hello-World",
                    "private": false,
                    "stargazers_count": 80,
                    "updated_at": "2011-01-26T19:14:43Z"
                },
                {
                    "id": 1296269,
                    "name": "Hello-World",
                    "full_name": "octocat\\/Hello-World",
                    "private": false,
                    "stargazers_count": 80,
                    "updated_at": "2011-01-26T19:14:43Z"
                }
            ]
        },
        "over_limit_repos": {
            "repository_count": 2,
            "repositories": [
                {
                    "id": 1296269,
                    "name": "Hello-World",
                    "full_name": "octocat\\/Hello-World",
                    "private": false,
                    "stargazers_count": 80,
                    "updated_at": "2011-01-26T19:14:43Z"
                },
                {
                    "id": 1296269,
                    "name": "Hello-World",
                    "full_name": "octocat\\/Hello-World",
                    "private": false,
                    "stargazers_count": 80,
                    "updated_at": "2011-01-26T19:14:43Z"
                }
            ]
        }
    }
}';

    /**
     * id: The ID of the variant analysis.
     * controllerRepo: A GitHub repository.
     * actor: A GitHub user.
     * queryLanguage: The language targeted by the CodeQL query
     * queryPackUrl: The download url for the query pack.
     * createdAt: The date and time at which the variant analysis was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     * updatedAt: The date and time at which the variant analysis was last updated, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     * completedAt: The date and time at which the variant analysis was completed, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ. Will be null if the variant analysis has not yet completed or this information is not available.
     * actionsWorkflowRunId: The GitHub Actions workflow run used to execute this variant analysis. This is only available if the workflow run has started.
     * failureReason: The reason for a failure of the variant analysis. This is only available if the variant analysis has failed.
     * skippedRepositories: Information about repositories that were skipped from processing. This information is only available to the user that initiated the variant analysis.
     */
    public function __construct(public int $id, #[MapFrom('controller_repo')]
    public Schema\SimpleRepository $controllerRepo, public Schema\SimpleUser $actor, #[MapFrom('query_language')]
    public string $queryLanguage, #[MapFrom('query_pack_url')]
    public string $queryPackUrl, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('updated_at')]
    public string|null $updatedAt, #[MapFrom('completed_at')]
    public string|null $completedAt, public string $status, #[MapFrom('actions_workflow_run_id')]
    public int|null $actionsWorkflowRunId, #[MapFrom('failure_reason')]
    public string|null $failureReason, #[MapFrom('scanned_repositories')]
    public array|null $scannedRepositories, #[MapFrom('skipped_repositories')]
    public Schema\CodeScanningVariantAnalysis\SkippedRepositories|null $skippedRepositories,)
    {
    }
}
