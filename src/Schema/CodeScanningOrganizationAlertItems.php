<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningOrganizationAlertItems
{
    public const SCHEMA_JSON         = '{
    "required": [
        "number",
        "created_at",
        "url",
        "html_url",
        "instances_url",
        "state",
        "dismissed_by",
        "dismissed_at",
        "dismissed_reason",
        "rule",
        "tool",
        "most_recent_instance",
        "repository"
    ],
    "type": "object",
    "properties": {
        "number": {
            "type": "integer",
            "description": "The security alert number.",
            "readOnly": true
        },
        "created_at": {
            "type": "string",
            "description": "The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "updated_at": {
            "type": "string",
            "description": "The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "url": {
            "type": "string",
            "description": "The REST API URL of the alert resource.",
            "format": "uri",
            "readOnly": true
        },
        "html_url": {
            "type": "string",
            "description": "The GitHub URL of the alert resource.",
            "format": "uri",
            "readOnly": true
        },
        "instances_url": {
            "type": "string",
            "description": "The REST API URL for fetching the list of instances for an alert.",
            "format": "uri",
            "readOnly": true
        },
        "state": {
            "enum": [
                "open",
                "dismissed",
                "fixed"
            ],
            "type": "string",
            "description": "State of a code scanning alert."
        },
        "fixed_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "dismissed_by": {
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
        "dismissed_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "dismissed_reason": {
            "enum": [
                "false positive",
                "won\'t fix",
                "used in tests",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "**Required when the state is dismissed.** The reason for dismissing or closing the alert."
        },
        "dismissed_comment": {
            "maxLength": 280,
            "type": [
                "string",
                "null"
            ],
            "description": "The dismissal comment associated with the dismissal of the alert."
        },
        "rule": {
            "type": "object",
            "properties": {
                "id": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "A unique identifier for the rule used to detect the alert."
                },
                "name": {
                    "type": "string",
                    "description": "The name of the rule used to detect the alert."
                },
                "severity": {
                    "enum": [
                        "none",
                        "note",
                        "warning",
                        "error",
                        null
                    ],
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The severity of the alert."
                },
                "security_severity_level": {
                    "enum": [
                        "low",
                        "medium",
                        "high",
                        "critical",
                        null
                    ],
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The security severity of the alert."
                },
                "description": {
                    "type": "string",
                    "description": "A short description of the rule used to detect the alert."
                },
                "full_description": {
                    "type": "string",
                    "description": "A description of the rule used to detect the alert."
                },
                "tags": {
                    "type": [
                        "array",
                        "null"
                    ],
                    "items": {
                        "type": "string"
                    },
                    "description": "A set of tags applicable for the rule."
                },
                "help": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "Detailed documentation for the rule as GitHub Flavored Markdown."
                },
                "help_uri": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "A link to the documentation for the rule used to detect the alert."
                }
            }
        },
        "tool": {
            "type": "object",
            "properties": {
                "name": {
                    "type": "string",
                    "description": "The name of the tool used to generate the code scanning analysis."
                },
                "version": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The version of the tool used to generate the code scanning analysis."
                },
                "guid": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data."
                }
            }
        },
        "most_recent_instance": {
            "type": "object",
            "properties": {
                "ref": {
                    "type": "string",
                    "description": "The Git reference, formatted as `refs\\/pull\\/<number>\\/merge`, `refs\\/pull\\/<number>\\/head`,\\n`refs\\/heads\\/<branch name>` or simply `<branch name>`."
                },
                "analysis_key": {
                    "type": "string",
                    "description": "Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."
                },
                "environment": {
                    "type": "string",
                    "description": "Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."
                },
                "category": {
                    "type": "string",
                    "description": "Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code."
                },
                "state": {
                    "enum": [
                        "open",
                        "dismissed",
                        "fixed"
                    ],
                    "type": "string",
                    "description": "State of a code scanning alert."
                },
                "commit_sha": {
                    "type": "string"
                },
                "message": {
                    "type": "object",
                    "properties": {
                        "text": {
                            "type": "string"
                        }
                    }
                },
                "location": {
                    "type": "object",
                    "properties": {
                        "path": {
                            "type": "string"
                        },
                        "start_line": {
                            "type": "integer"
                        },
                        "end_line": {
                            "type": "integer"
                        },
                        "start_column": {
                            "type": "integer"
                        },
                        "end_column": {
                            "type": "integer"
                        }
                    },
                    "description": "Describe a region within a file for the alert."
                },
                "html_url": {
                    "type": "string"
                },
                "classifications": {
                    "type": "array",
                    "items": {
                        "enum": [
                            "source",
                            "generated",
                            "test",
                            "library",
                            null
                        ],
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "A classification of the file. For example to identify it as generated."
                    },
                    "description": "Classifications that have been applied to the file that triggered the alert.\\nFor example identifying it as documentation, or a generated file."
                }
            }
        },
        "repository": {
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
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "number": 6,
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "url": "https:\\/\\/example.com\\/",
    "html_url": "https:\\/\\/example.com\\/",
    "instances_url": "https:\\/\\/example.com\\/",
    "state": "open",
    "fixed_at": "1970-01-01T00:00:00+00:00",
    "dismissed_by": {
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
    "dismissed_at": "1970-01-01T00:00:00+00:00",
    "dismissed_reason": "used in tests",
    "dismissed_comment": "generated",
    "rule": {
        "id": "generated",
        "name": "generated",
        "severity": "error",
        "security_severity_level": "low",
        "description": "generated",
        "full_description": "generated",
        "tags": null,
        "help": "generated",
        "help_uri": "generated"
    },
    "tool": {
        "name": "generated",
        "version": "generated",
        "guid": "generated"
    },
    "most_recent_instance": {
        "ref": "generated",
        "analysis_key": "generated",
        "environment": "generated",
        "category": "generated",
        "state": "open",
        "commit_sha": "generated",
        "message": {
            "text": "generated"
        },
        "location": {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10
        },
        "html_url": "generated",
        "classifications": [
            "generated",
            "generated"
        ]
    },
    "repository": {
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
            "starred_at": "\\"2020-07-09T00:17:55Z\\""
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
    }
}';

    /**
     * number: The security alert number.
     * createdAt: The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * updatedAt: The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * url: The REST API URL of the alert resource.
     * htmlUrl: The GitHub URL of the alert resource.
     * instancesUrl: The REST API URL for fetching the list of instances for an alert.
     * state: State of a code scanning alert.
     * fixedAt: The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * dismissedAt: The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * dismissedReason: **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     * dismissedComment: The dismissal comment associated with the dismissal of the alert.
     * repository: A GitHub repository.
     */
    public function __construct(public int $number, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string|null $updatedAt, public string $url, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('instances_url')]
    public string $instancesUrl, public string $state, #[MapFrom('fixed_at')]
    public string|null $fixedAt, #[MapFrom('dismissed_by')]
    public Schema\SimpleUser|null $dismissedBy, #[MapFrom('dismissed_at')]
    public string|null $dismissedAt, #[MapFrom('dismissed_reason')]
    public string|null $dismissedReason, #[MapFrom('dismissed_comment')]
    public string|null $dismissedComment, public Schema\CodeScanningAlertRuleSummary $rule, public Schema\CodeScanningAnalysisTool $tool, #[MapFrom('most_recent_instance')]
    public Schema\CodeScanningAlertInstance $mostRecentInstance, public Schema\SimpleRepository $repository,)
    {
    }
}
