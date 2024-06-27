<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class PullRequestWebhook
{
    public const SCHEMA_JSON         = '{
    "allOf": [
        {
            "title": "Pull Request",
            "required": [
                "_links",
                "assignee",
                "labels",
                "base",
                "body",
                "closed_at",
                "comments_url",
                "commits_url",
                "created_at",
                "diff_url",
                "head",
                "html_url",
                "id",
                "node_id",
                "issue_url",
                "merge_commit_sha",
                "merged_at",
                "milestone",
                "number",
                "patch_url",
                "review_comment_url",
                "review_comments_url",
                "statuses_url",
                "state",
                "locked",
                "title",
                "updated_at",
                "url",
                "user",
                "author_association",
                "auto_merge",
                "additions",
                "changed_files",
                "comments",
                "commits",
                "deletions",
                "mergeable",
                "mergeable_state",
                "merged",
                "maintainer_can_modify",
                "merged_by",
                "review_comments"
            ],
            "type": "object",
            "properties": {
                "url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1347"
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
                        "MDExOlB1bGxSZXF1ZXN0MQ=="
                    ]
                },
                "html_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1347"
                    ]
                },
                "diff_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1347.diff"
                    ]
                },
                "patch_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1347.patch"
                    ]
                },
                "issue_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/1347"
                    ]
                },
                "commits_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1347\\/commits"
                    ]
                },
                "review_comments_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1347\\/comments"
                    ]
                },
                "review_comment_url": {
                    "type": "string",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments{\\/number}"
                    ]
                },
                "comments_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/1347\\/comments"
                    ]
                },
                "statuses_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"
                    ]
                },
                "number": {
                    "type": "integer",
                    "description": "Number uniquely identifying the pull request within its repository.",
                    "examples": [
                        42
                    ]
                },
                "state": {
                    "enum": [
                        "open",
                        "closed"
                    ],
                    "type": "string",
                    "description": "State of this Pull Request. Either `open` or `closed`.",
                    "examples": [
                        "open"
                    ]
                },
                "locked": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                },
                "title": {
                    "type": "string",
                    "description": "The title of the pull request.",
                    "examples": [
                        "Amazing new feature"
                    ]
                },
                "user": {
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
                "body": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "examples": [
                        "Please pull these awesome changes"
                    ]
                },
                "labels": {
                    "type": "array",
                    "items": {
                        "required": [
                            "id",
                            "node_id",
                            "url",
                            "name",
                            "description",
                            "color",
                            "default"
                        ],
                        "type": "object",
                        "properties": {
                            "id": {
                                "type": "integer",
                                "format": "int64"
                            },
                            "node_id": {
                                "type": "string"
                            },
                            "url": {
                                "type": "string"
                            },
                            "name": {
                                "type": "string"
                            },
                            "description": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "color": {
                                "type": "string"
                            },
                            "default": {
                                "type": "boolean"
                            }
                        }
                    }
                },
                "milestone": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
                        {
                            "title": "Milestone",
                            "required": [
                                "closed_issues",
                                "creator",
                                "description",
                                "due_on",
                                "closed_at",
                                "id",
                                "node_id",
                                "labels_url",
                                "html_url",
                                "number",
                                "open_issues",
                                "state",
                                "title",
                                "url",
                                "created_at",
                                "updated_at"
                            ],
                            "type": "object",
                            "properties": {
                                "url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones\\/1"
                                    ]
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/github.com\\/octocat\\/Hello-World\\/milestones\\/v1.0"
                                    ]
                                },
                                "labels_url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones\\/1\\/labels"
                                    ]
                                },
                                "id": {
                                    "type": "integer",
                                    "examples": [
                                        1002604
                                    ]
                                },
                                "node_id": {
                                    "type": "string",
                                    "examples": [
                                        "MDk6TWlsZXN0b25lMTAwMjYwNA=="
                                    ]
                                },
                                "number": {
                                    "type": "integer",
                                    "description": "The number of the milestone.",
                                    "examples": [
                                        42
                                    ]
                                },
                                "state": {
                                    "enum": [
                                        "open",
                                        "closed"
                                    ],
                                    "type": "string",
                                    "description": "The state of the milestone.",
                                    "default": "open",
                                    "examples": [
                                        "open"
                                    ]
                                },
                                "title": {
                                    "type": "string",
                                    "description": "The title of the milestone.",
                                    "examples": [
                                        "v1.0"
                                    ]
                                },
                                "description": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "examples": [
                                        "Tracking milestone for version 1.0"
                                    ]
                                },
                                "creator": {
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
                                "open_issues": {
                                    "type": "integer",
                                    "examples": [
                                        4
                                    ]
                                },
                                "closed_issues": {
                                    "type": "integer",
                                    "examples": [
                                        8
                                    ]
                                },
                                "created_at": {
                                    "type": "string",
                                    "format": "date-time",
                                    "examples": [
                                        "2011-04-10T20:09:31Z"
                                    ]
                                },
                                "updated_at": {
                                    "type": "string",
                                    "format": "date-time",
                                    "examples": [
                                        "2014-03-03T18:58:10Z"
                                    ]
                                },
                                "closed_at": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "date-time",
                                    "examples": [
                                        "2013-02-12T13:22:01Z"
                                    ]
                                },
                                "due_on": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "date-time",
                                    "examples": [
                                        "2012-10-09T23:39:01Z"
                                    ]
                                }
                            },
                            "description": "A collection of related issues and pull requests."
                        }
                    ]
                },
                "active_lock_reason": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "examples": [
                        "too heated"
                    ]
                },
                "created_at": {
                    "type": "string",
                    "format": "date-time",
                    "examples": [
                        "2011-01-26T19:01:12Z"
                    ]
                },
                "updated_at": {
                    "type": "string",
                    "format": "date-time",
                    "examples": [
                        "2011-01-26T19:01:12Z"
                    ]
                },
                "closed_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time",
                    "examples": [
                        "2011-01-26T19:01:12Z"
                    ]
                },
                "merged_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time",
                    "examples": [
                        "2011-01-26T19:01:12Z"
                    ]
                },
                "merge_commit_sha": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "examples": [
                        "e5bd3914e2e596debea16f433f57875b5b90bcd6"
                    ]
                },
                "assignee": {
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
                "assignees": {
                    "type": [
                        "array",
                        "null"
                    ],
                    "items": {
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
                    }
                },
                "requested_reviewers": {
                    "type": [
                        "array",
                        "null"
                    ],
                    "items": {
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
                    }
                },
                "requested_teams": {
                    "type": [
                        "array",
                        "null"
                    ],
                    "items": {
                        "title": "Team Simple",
                        "required": [
                            "id",
                            "node_id",
                            "url",
                            "members_url",
                            "name",
                            "description",
                            "permission",
                            "html_url",
                            "repositories_url",
                            "slug"
                        ],
                        "type": "object",
                        "properties": {
                            "id": {
                                "type": "integer",
                                "description": "Unique identifier of the team",
                                "examples": [
                                    1
                                ]
                            },
                            "node_id": {
                                "type": "string",
                                "examples": [
                                    "MDQ6VGVhbTE="
                                ]
                            },
                            "url": {
                                "type": "string",
                                "description": "URL for the team",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1"
                                ]
                            },
                            "members_url": {
                                "type": "string",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}"
                                ]
                            },
                            "name": {
                                "type": "string",
                                "description": "Name of the team",
                                "examples": [
                                    "Justice League"
                                ]
                            },
                            "description": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "description": "Description of the team",
                                "examples": [
                                    "A great team."
                                ]
                            },
                            "permission": {
                                "type": "string",
                                "description": "Permission that the team will have for its repositories",
                                "examples": [
                                    "admin"
                                ]
                            },
                            "privacy": {
                                "type": "string",
                                "description": "The level of privacy this team should have",
                                "examples": [
                                    "closed"
                                ]
                            },
                            "notification_setting": {
                                "type": "string",
                                "description": "The notification setting the team has set",
                                "examples": [
                                    "notifications_enabled"
                                ]
                            },
                            "html_url": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"
                                ]
                            },
                            "repositories_url": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos"
                                ]
                            },
                            "slug": {
                                "type": "string",
                                "examples": [
                                    "justice-league"
                                ]
                            },
                            "ldap_dn": {
                                "type": "string",
                                "description": "Distinguished Name (DN) that team maps to within LDAP environment",
                                "examples": [
                                    "uid=example,ou=users,dc=github,dc=com"
                                ]
                            }
                        },
                        "description": "Groups of organization members that gives permissions on specified repositories."
                    }
                },
                "head": {
                    "required": [
                        "label",
                        "ref",
                        "repo",
                        "sha",
                        "user"
                    ],
                    "type": "object",
                    "properties": {
                        "label": {
                            "type": "string"
                        },
                        "ref": {
                            "type": "string"
                        },
                        "repo": {
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
                                "has_discussions",
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
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
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
                                    "type": "string",
                                    "format": "uri"
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
                                "forks_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "full_name": {
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
                                "hooks_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer"
                                },
                                "node_id": {
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
                                    "type": "string",
                                    "format": "uri"
                                },
                                "merges_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "milestones_url": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                },
                                "notifications_url": {
                                    "type": "string"
                                },
                                "owner": {
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
                                        "avatar_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "events_url": {
                                            "type": "string"
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
                                        "gravatar_id": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer"
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "login": {
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
                                            "type": "string"
                                        },
                                        "subscriptions_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "type": {
                                            "type": "string"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        }
                                    }
                                },
                                "private": {
                                    "type": "boolean"
                                },
                                "pulls_url": {
                                    "type": "string"
                                },
                                "releases_url": {
                                    "type": "string"
                                },
                                "stargazers_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "statuses_url": {
                                    "type": "string"
                                },
                                "subscribers_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "subscription_url": {
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
                                "trees_url": {
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "clone_url": {
                                    "type": "string"
                                },
                                "default_branch": {
                                    "type": "string"
                                },
                                "forks": {
                                    "type": "integer"
                                },
                                "forks_count": {
                                    "type": "integer"
                                },
                                "git_url": {
                                    "type": "string"
                                },
                                "has_downloads": {
                                    "type": "boolean"
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
                                "has_discussions": {
                                    "type": "boolean"
                                },
                                "homepage": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "uri"
                                },
                                "language": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "master_branch": {
                                    "type": "string"
                                },
                                "archived": {
                                    "type": "boolean"
                                },
                                "disabled": {
                                    "type": "boolean"
                                },
                                "visibility": {
                                    "type": "string",
                                    "description": "The repository visibility: public, private, or internal."
                                },
                                "mirror_url": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "uri"
                                },
                                "open_issues": {
                                    "type": "integer"
                                },
                                "open_issues_count": {
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
                                "temp_clone_token": {
                                    "type": "string"
                                },
                                "allow_merge_commit": {
                                    "type": "boolean"
                                },
                                "allow_squash_merge": {
                                    "type": "boolean"
                                },
                                "allow_rebase_merge": {
                                    "type": "boolean"
                                },
                                "license": {
                                    "required": [
                                        "key",
                                        "name",
                                        "url",
                                        "spdx_id",
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
                                        "url": {
                                            "type": [
                                                "string",
                                                "null"
                                            ],
                                            "format": "uri"
                                        },
                                        "spdx_id": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "node_id": {
                                            "type": "string"
                                        }
                                    }
                                },
                                "pushed_at": {
                                    "type": "string",
                                    "format": "date-time"
                                },
                                "size": {
                                    "type": "integer"
                                },
                                "ssh_url": {
                                    "type": "string"
                                },
                                "stargazers_count": {
                                    "type": "integer"
                                },
                                "svn_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "topics": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    }
                                },
                                "watchers": {
                                    "type": "integer"
                                },
                                "watchers_count": {
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
                                "allow_forking": {
                                    "type": "boolean"
                                },
                                "is_template": {
                                    "type": "boolean"
                                },
                                "web_commit_signoff_required": {
                                    "type": "boolean"
                                }
                            }
                        },
                        "sha": {
                            "type": "string"
                        },
                        "user": {
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
                                "avatar_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "events_url": {
                                    "type": "string"
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
                                "gravatar_id": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer"
                                },
                                "node_id": {
                                    "type": "string"
                                },
                                "login": {
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
                                    "type": "string"
                                },
                                "subscriptions_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "type": {
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                }
                            }
                        }
                    }
                },
                "base": {
                    "required": [
                        "label",
                        "ref",
                        "repo",
                        "sha",
                        "user"
                    ],
                    "type": "object",
                    "properties": {
                        "label": {
                            "type": "string"
                        },
                        "ref": {
                            "type": "string"
                        },
                        "repo": {
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
                                "has_discussions",
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
                                    "type": "string",
                                    "format": "uri"
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
                                "forks_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "full_name": {
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
                                "hooks_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer"
                                },
                                "is_template": {
                                    "type": "boolean"
                                },
                                "node_id": {
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
                                    "type": "string",
                                    "format": "uri"
                                },
                                "merges_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "milestones_url": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                },
                                "notifications_url": {
                                    "type": "string"
                                },
                                "owner": {
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
                                        "avatar_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "events_url": {
                                            "type": "string"
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
                                        "gravatar_id": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer"
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "login": {
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
                                            "type": "string"
                                        },
                                        "subscriptions_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "type": {
                                            "type": "string"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        }
                                    }
                                },
                                "private": {
                                    "type": "boolean"
                                },
                                "pulls_url": {
                                    "type": "string"
                                },
                                "releases_url": {
                                    "type": "string"
                                },
                                "stargazers_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "statuses_url": {
                                    "type": "string"
                                },
                                "subscribers_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "subscription_url": {
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
                                "trees_url": {
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "clone_url": {
                                    "type": "string"
                                },
                                "default_branch": {
                                    "type": "string"
                                },
                                "forks": {
                                    "type": "integer"
                                },
                                "forks_count": {
                                    "type": "integer"
                                },
                                "git_url": {
                                    "type": "string"
                                },
                                "has_downloads": {
                                    "type": "boolean"
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
                                "has_discussions": {
                                    "type": "boolean"
                                },
                                "homepage": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "uri"
                                },
                                "language": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "master_branch": {
                                    "type": "string"
                                },
                                "archived": {
                                    "type": "boolean"
                                },
                                "disabled": {
                                    "type": "boolean"
                                },
                                "visibility": {
                                    "type": "string",
                                    "description": "The repository visibility: public, private, or internal."
                                },
                                "mirror_url": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "uri"
                                },
                                "open_issues": {
                                    "type": "integer"
                                },
                                "open_issues_count": {
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
                                "temp_clone_token": {
                                    "type": "string"
                                },
                                "allow_merge_commit": {
                                    "type": "boolean"
                                },
                                "allow_squash_merge": {
                                    "type": "boolean"
                                },
                                "allow_rebase_merge": {
                                    "type": "boolean"
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
                                "pushed_at": {
                                    "type": "string",
                                    "format": "date-time"
                                },
                                "size": {
                                    "type": "integer"
                                },
                                "ssh_url": {
                                    "type": "string"
                                },
                                "stargazers_count": {
                                    "type": "integer"
                                },
                                "svn_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "topics": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    }
                                },
                                "watchers": {
                                    "type": "integer"
                                },
                                "watchers_count": {
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
                                "allow_forking": {
                                    "type": "boolean"
                                },
                                "web_commit_signoff_required": {
                                    "type": "boolean"
                                }
                            }
                        },
                        "sha": {
                            "type": "string"
                        },
                        "user": {
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
                                "avatar_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "events_url": {
                                    "type": "string"
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
                                "gravatar_id": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer"
                                },
                                "node_id": {
                                    "type": "string"
                                },
                                "login": {
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
                                    "type": "string"
                                },
                                "subscriptions_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "type": {
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                }
                            }
                        }
                    }
                },
                "_links": {
                    "required": [
                        "comments",
                        "commits",
                        "statuses",
                        "html",
                        "issue",
                        "review_comments",
                        "review_comment",
                        "self"
                    ],
                    "type": "object",
                    "properties": {
                        "comments": {
                            "title": "Link",
                            "required": [
                                "href"
                            ],
                            "type": "object",
                            "properties": {
                                "href": {
                                    "type": "string"
                                }
                            },
                            "description": "Hypermedia Link"
                        },
                        "commits": {
                            "title": "Link",
                            "required": [
                                "href"
                            ],
                            "type": "object",
                            "properties": {
                                "href": {
                                    "type": "string"
                                }
                            },
                            "description": "Hypermedia Link"
                        },
                        "statuses": {
                            "title": "Link",
                            "required": [
                                "href"
                            ],
                            "type": "object",
                            "properties": {
                                "href": {
                                    "type": "string"
                                }
                            },
                            "description": "Hypermedia Link"
                        },
                        "html": {
                            "title": "Link",
                            "required": [
                                "href"
                            ],
                            "type": "object",
                            "properties": {
                                "href": {
                                    "type": "string"
                                }
                            },
                            "description": "Hypermedia Link"
                        },
                        "issue": {
                            "title": "Link",
                            "required": [
                                "href"
                            ],
                            "type": "object",
                            "properties": {
                                "href": {
                                    "type": "string"
                                }
                            },
                            "description": "Hypermedia Link"
                        },
                        "review_comments": {
                            "title": "Link",
                            "required": [
                                "href"
                            ],
                            "type": "object",
                            "properties": {
                                "href": {
                                    "type": "string"
                                }
                            },
                            "description": "Hypermedia Link"
                        },
                        "review_comment": {
                            "title": "Link",
                            "required": [
                                "href"
                            ],
                            "type": "object",
                            "properties": {
                                "href": {
                                    "type": "string"
                                }
                            },
                            "description": "Hypermedia Link"
                        },
                        "self": {
                            "title": "Link",
                            "required": [
                                "href"
                            ],
                            "type": "object",
                            "properties": {
                                "href": {
                                    "type": "string"
                                }
                            },
                            "description": "Hypermedia Link"
                        }
                    }
                },
                "author_association": {
                    "title": "author_association",
                    "enum": [
                        "COLLABORATOR",
                        "CONTRIBUTOR",
                        "FIRST_TIMER",
                        "FIRST_TIME_CONTRIBUTOR",
                        "MANNEQUIN",
                        "MEMBER",
                        "NONE",
                        "OWNER"
                    ],
                    "type": "string",
                    "description": "How the author is associated with the repository.",
                    "examples": [
                        "OWNER"
                    ]
                },
                "auto_merge": {
                    "title": "Auto merge",
                    "required": [
                        "enabled_by",
                        "merge_method",
                        "commit_title",
                        "commit_message"
                    ],
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "enabled_by": {
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
                        "merge_method": {
                            "enum": [
                                "merge",
                                "squash",
                                "rebase"
                            ],
                            "type": "string",
                            "description": "The merge method to use."
                        },
                        "commit_title": {
                            "type": "string",
                            "description": "Title for the merge commit message."
                        },
                        "commit_message": {
                            "type": "string",
                            "description": "Commit message for the merge commit."
                        }
                    },
                    "description": "The status of auto merging a pull request."
                },
                "draft": {
                    "type": "boolean",
                    "description": "Indicates whether or not the pull request is a draft.",
                    "examples": [
                        false
                    ]
                },
                "merged": {
                    "type": "boolean"
                },
                "mergeable": {
                    "type": [
                        "boolean",
                        "null"
                    ],
                    "examples": [
                        true
                    ]
                },
                "rebaseable": {
                    "type": [
                        "boolean",
                        "null"
                    ],
                    "examples": [
                        true
                    ]
                },
                "mergeable_state": {
                    "type": "string",
                    "examples": [
                        "clean"
                    ]
                },
                "merged_by": {
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
                "comments": {
                    "type": "integer",
                    "examples": [
                        10
                    ]
                },
                "review_comments": {
                    "type": "integer",
                    "examples": [
                        0
                    ]
                },
                "maintainer_can_modify": {
                    "type": "boolean",
                    "description": "Indicates whether maintainers can modify the pull request.",
                    "examples": [
                        true
                    ]
                },
                "commits": {
                    "type": "integer",
                    "examples": [
                        3
                    ]
                },
                "additions": {
                    "type": "integer",
                    "examples": [
                        100
                    ]
                },
                "deletions": {
                    "type": "integer",
                    "examples": [
                        3
                    ]
                },
                "changed_files": {
                    "type": "integer",
                    "examples": [
                        5
                    ]
                }
            },
            "description": "Pull requests let you tell others about changes you\'ve pushed to a repository on GitHub. Once a pull request is sent, interested parties can review the set of changes, discuss potential modifications, and even push follow-up commits if necessary."
        },
        {
            "type": "object",
            "properties": {
                "allow_auto_merge": {
                    "type": "boolean",
                    "description": "Whether to allow auto-merge for pull requests.",
                    "default": false
                },
                "allow_update_branch": {
                    "type": "boolean",
                    "description": "Whether to allow updating the pull request\'s branch."
                },
                "delete_branch_on_merge": {
                    "type": "boolean",
                    "description": "Whether to delete head branches when pull requests are merged.",
                    "default": false
                },
                "merge_commit_message": {
                    "enum": [
                        "PR_BODY",
                        "PR_TITLE",
                        "BLANK"
                    ],
                    "type": "string",
                    "description": "The default value for a merge commit message.\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."
                },
                "merge_commit_title": {
                    "enum": [
                        "PR_TITLE",
                        "MERGE_MESSAGE"
                    ],
                    "type": "string",
                    "description": "The default value for a merge commit title.\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., \\"Merge pull request #123 from branch-name\\")."
                },
                "squash_merge_commit_message": {
                    "enum": [
                        "PR_BODY",
                        "COMMIT_MESSAGES",
                        "BLANK"
                    ],
                    "type": "string",
                    "description": "The default value for a squash merge commit message:\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."
                },
                "squash_merge_commit_title": {
                    "enum": [
                        "PR_TITLE",
                        "COMMIT_OR_PR_TITLE"
                    ],
                    "type": "string",
                    "description": "The default value for a squash merge commit title:\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."
                },
                "use_squash_pr_title_as_default": {
                    "type": "boolean",
                    "description": "Whether a squash merge commit can use the pull request title as default. **This property has been deprecated. Please use `squash_merge_commit_title` instead.**",
                    "default": false
                }
            }
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
