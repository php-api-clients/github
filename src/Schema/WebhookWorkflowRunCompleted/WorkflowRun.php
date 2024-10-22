<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowRunCompleted;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class WorkflowRun
{
    public const SCHEMA_JSON         = '{
    "title": "Workflow Run",
    "required": [
        "actor",
        "artifacts_url",
        "cancel_url",
        "check_suite_id",
        "check_suite_node_id",
        "check_suite_url",
        "conclusion",
        "created_at",
        "event",
        "head_branch",
        "head_commit",
        "head_repository",
        "head_sha",
        "html_url",
        "id",
        "jobs_url",
        "logs_url",
        "name",
        "node_id",
        "path",
        "previous_attempt_url",
        "pull_requests",
        "repository",
        "rerun_url",
        "run_attempt",
        "run_number",
        "run_started_at",
        "status",
        "triggering_actor",
        "updated_at",
        "url",
        "workflow_id",
        "workflow_url"
    ],
    "type": "object",
    "properties": {
        "actor": {
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
                },
                "user_view_type": {
                    "type": "string"
                }
            }
        },
        "artifacts_url": {
            "type": "string",
            "format": "uri"
        },
        "cancel_url": {
            "type": "string",
            "format": "uri"
        },
        "check_suite_id": {
            "type": "integer"
        },
        "check_suite_node_id": {
            "type": "string"
        },
        "check_suite_url": {
            "type": "string",
            "format": "uri"
        },
        "conclusion": {
            "enum": [
                "action_required",
                "cancelled",
                "failure",
                "neutral",
                "skipped",
                "stale",
                "success",
                "timed_out",
                "startup_failure",
                null
            ],
            "type": [
                "string",
                "null"
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "event": {
            "type": "string"
        },
        "head_branch": {
            "type": [
                "string",
                "null"
            ]
        },
        "head_commit": {
            "title": "SimpleCommit",
            "required": [
                "id",
                "tree_id",
                "message",
                "timestamp",
                "author",
                "committer"
            ],
            "type": "object",
            "properties": {
                "author": {
                    "title": "Committer",
                    "required": [
                        "email",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "date": {
                            "type": "string",
                            "format": "date-time"
                        },
                        "email": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "email"
                        },
                        "name": {
                            "type": "string",
                            "description": "The git author\'s name."
                        },
                        "username": {
                            "type": "string"
                        }
                    },
                    "description": "Metaproperties for Git author\\/committer information."
                },
                "committer": {
                    "title": "Committer",
                    "required": [
                        "email",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "date": {
                            "type": "string",
                            "format": "date-time"
                        },
                        "email": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "email"
                        },
                        "name": {
                            "type": "string",
                            "description": "The git author\'s name."
                        },
                        "username": {
                            "type": "string"
                        }
                    },
                    "description": "Metaproperties for Git author\\/committer information."
                },
                "id": {
                    "type": "string"
                },
                "message": {
                    "type": "string"
                },
                "timestamp": {
                    "type": "string"
                },
                "tree_id": {
                    "type": "string"
                }
            }
        },
        "head_repository": {
            "title": "Repository Lite",
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
                "issue_comment_url",
                "issue_events_url",
                "issues_url",
                "keys_url",
                "labels_url",
                "languages_url",
                "merges_url",
                "milestones_url",
                "name",
                "node_id",
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
                "archive_url": {
                    "type": "string",
                    "format": "uri-template"
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
                "languages_url": {
                    "type": "string",
                    "format": "uri"
                },
                "merges_url": {
                    "type": "string",
                    "format": "uri"
                },
                "milestones_url": {
                    "type": "string",
                    "format": "uri-template"
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
                        },
                        "user_view_type": {
                            "type": "string"
                        }
                    }
                },
                "private": {
                    "type": "boolean",
                    "description": "Whether the repository is private or public."
                },
                "pulls_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "releases_url": {
                    "type": "string",
                    "format": "uri-template"
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
                "tags_url": {
                    "type": "string",
                    "format": "uri"
                },
                "teams_url": {
                    "type": "string",
                    "format": "uri"
                },
                "trees_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        },
        "head_sha": {
            "type": "string"
        },
        "html_url": {
            "type": "string",
            "format": "uri"
        },
        "id": {
            "type": "integer"
        },
        "jobs_url": {
            "type": "string",
            "format": "uri"
        },
        "logs_url": {
            "type": "string",
            "format": "uri"
        },
        "name": {
            "type": [
                "string",
                "null"
            ]
        },
        "node_id": {
            "type": "string"
        },
        "path": {
            "type": "string"
        },
        "previous_attempt_url": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        },
        "pull_requests": {
            "type": "array",
            "items": {
                "required": [
                    "url",
                    "id",
                    "number",
                    "head",
                    "base"
                ],
                "type": [
                    "object",
                    "null"
                ],
                "properties": {
                    "base": {
                        "required": [
                            "ref",
                            "sha",
                            "repo"
                        ],
                        "type": "object",
                        "properties": {
                            "ref": {
                                "type": "string"
                            },
                            "repo": {
                                "title": "Repo Ref",
                                "required": [
                                    "id",
                                    "url",
                                    "name"
                                ],
                                "type": "object",
                                "properties": {
                                    "id": {
                                        "type": "integer"
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
                            "sha": {
                                "type": "string"
                            }
                        }
                    },
                    "head": {
                        "required": [
                            "ref",
                            "sha",
                            "repo"
                        ],
                        "type": "object",
                        "properties": {
                            "ref": {
                                "type": "string"
                            },
                            "repo": {
                                "title": "Repo Ref",
                                "required": [
                                    "id",
                                    "url",
                                    "name"
                                ],
                                "type": "object",
                                "properties": {
                                    "id": {
                                        "type": "integer"
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
                            "sha": {
                                "type": "string"
                            }
                        }
                    },
                    "id": {
                        "type": "number"
                    },
                    "number": {
                        "type": "number"
                    },
                    "url": {
                        "type": "string",
                        "format": "uri"
                    }
                }
            }
        },
        "referenced_workflows": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "required": [
                    "path",
                    "sha"
                ],
                "type": "object",
                "properties": {
                    "path": {
                        "type": "string"
                    },
                    "ref": {
                        "type": "string"
                    },
                    "sha": {
                        "type": "string"
                    }
                }
            }
        },
        "repository": {
            "title": "Repository Lite",
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
                "issue_comment_url",
                "issue_events_url",
                "issues_url",
                "keys_url",
                "labels_url",
                "languages_url",
                "merges_url",
                "milestones_url",
                "name",
                "node_id",
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
                "archive_url": {
                    "type": "string",
                    "format": "uri-template"
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
                "languages_url": {
                    "type": "string",
                    "format": "uri"
                },
                "merges_url": {
                    "type": "string",
                    "format": "uri"
                },
                "milestones_url": {
                    "type": "string",
                    "format": "uri-template"
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
                        },
                        "user_view_type": {
                            "type": "string"
                        }
                    }
                },
                "private": {
                    "type": "boolean",
                    "description": "Whether the repository is private or public."
                },
                "pulls_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "releases_url": {
                    "type": "string",
                    "format": "uri-template"
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
                "tags_url": {
                    "type": "string",
                    "format": "uri"
                },
                "teams_url": {
                    "type": "string",
                    "format": "uri"
                },
                "trees_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        },
        "rerun_url": {
            "type": "string",
            "format": "uri"
        },
        "run_attempt": {
            "type": "integer"
        },
        "run_number": {
            "type": "integer"
        },
        "run_started_at": {
            "type": "string",
            "format": "date-time"
        },
        "status": {
            "enum": [
                "requested",
                "in_progress",
                "completed",
                "queued",
                "pending",
                "waiting"
            ],
            "type": "string"
        },
        "triggering_actor": {
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
                },
                "user_view_type": {
                    "type": "string"
                }
            }
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "workflow_id": {
            "type": "integer"
        },
        "workflow_url": {
            "type": "string",
            "format": "uri"
        },
        "display_title": {
            "type": "string",
            "description": "The event-specific title associated with the run or the run-name if set, or the value of `run-name` if it is set in the workflow.",
            "examples": [
                "Simple Workflow"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = 'Workflow Run';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "actor": {
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
        "url": "https:\\/\\/example.com\\/",
        "user_view_type": "generated"
    },
    "artifacts_url": "https:\\/\\/example.com\\/",
    "cancel_url": "https:\\/\\/example.com\\/",
    "check_suite_id": 14,
    "check_suite_node_id": "generated",
    "check_suite_url": "https:\\/\\/example.com\\/",
    "conclusion": "startup_failure",
    "created_at": "1970-01-01T00:00:00+00:00",
    "event": "generated",
    "head_branch": "generated",
    "head_commit": {
        "author": {
            "date": "1970-01-01T00:00:00+00:00",
            "email": "hi@example.com",
            "name": "generated",
            "username": "generated"
        },
        "committer": {
            "date": "1970-01-01T00:00:00+00:00",
            "email": "hi@example.com",
            "name": "generated",
            "username": "generated"
        },
        "id": "generated",
        "message": "generated",
        "timestamp": "generated",
        "tree_id": "generated"
    },
    "head_repository": {
        "archive_url": "generated",
        "assignees_url": "generated",
        "blobs_url": "generated",
        "branches_url": "generated",
        "collaborators_url": "generated",
        "comments_url": "generated",
        "commits_url": "generated",
        "compare_url": "generated",
        "contents_url": "generated",
        "contributors_url": "https:\\/\\/example.com\\/",
        "deployments_url": "https:\\/\\/example.com\\/",
        "description": "generated",
        "downloads_url": "https:\\/\\/example.com\\/",
        "events_url": "https:\\/\\/example.com\\/",
        "fork": false,
        "forks_url": "https:\\/\\/example.com\\/",
        "full_name": "generated",
        "git_commits_url": "generated",
        "git_refs_url": "generated",
        "git_tags_url": "generated",
        "hooks_url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "issue_comment_url": "generated",
        "issue_events_url": "generated",
        "issues_url": "generated",
        "keys_url": "generated",
        "labels_url": "generated",
        "languages_url": "https:\\/\\/example.com\\/",
        "merges_url": "https:\\/\\/example.com\\/",
        "milestones_url": "generated",
        "name": "generated",
        "node_id": "generated",
        "notifications_url": "generated",
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
            "url": "https:\\/\\/example.com\\/",
            "user_view_type": "generated"
        },
        "private": false,
        "pulls_url": "generated",
        "releases_url": "generated",
        "stargazers_url": "https:\\/\\/example.com\\/",
        "statuses_url": "generated",
        "subscribers_url": "https:\\/\\/example.com\\/",
        "subscription_url": "https:\\/\\/example.com\\/",
        "tags_url": "https:\\/\\/example.com\\/",
        "teams_url": "https:\\/\\/example.com\\/",
        "trees_url": "generated",
        "url": "https:\\/\\/example.com\\/"
    },
    "head_sha": "generated",
    "html_url": "https:\\/\\/example.com\\/",
    "id": 2,
    "jobs_url": "https:\\/\\/example.com\\/",
    "logs_url": "https:\\/\\/example.com\\/",
    "name": "generated",
    "node_id": "generated",
    "path": "generated",
    "previous_attempt_url": "https:\\/\\/example.com\\/",
    "pull_requests": [
        {
            "base": {
                "ref": "generated",
                "repo": {
                    "id": 2,
                    "name": "generated",
                    "url": "https:\\/\\/example.com\\/"
                },
                "sha": "generated"
            },
            "head": {
                "ref": "generated",
                "repo": {
                    "id": 2,
                    "name": "generated",
                    "url": "https:\\/\\/example.com\\/"
                },
                "sha": "generated"
            },
            "id": 0.2,
            "number": 0.6,
            "url": "https:\\/\\/example.com\\/"
        },
        {
            "base": {
                "ref": "generated",
                "repo": {
                    "id": 2,
                    "name": "generated",
                    "url": "https:\\/\\/example.com\\/"
                },
                "sha": "generated"
            },
            "head": {
                "ref": "generated",
                "repo": {
                    "id": 2,
                    "name": "generated",
                    "url": "https:\\/\\/example.com\\/"
                },
                "sha": "generated"
            },
            "id": 0.2,
            "number": 0.6,
            "url": "https:\\/\\/example.com\\/"
        }
    ],
    "referenced_workflows": null,
    "repository": {
        "archive_url": "generated",
        "assignees_url": "generated",
        "blobs_url": "generated",
        "branches_url": "generated",
        "collaborators_url": "generated",
        "comments_url": "generated",
        "commits_url": "generated",
        "compare_url": "generated",
        "contents_url": "generated",
        "contributors_url": "https:\\/\\/example.com\\/",
        "deployments_url": "https:\\/\\/example.com\\/",
        "description": "generated",
        "downloads_url": "https:\\/\\/example.com\\/",
        "events_url": "https:\\/\\/example.com\\/",
        "fork": false,
        "forks_url": "https:\\/\\/example.com\\/",
        "full_name": "generated",
        "git_commits_url": "generated",
        "git_refs_url": "generated",
        "git_tags_url": "generated",
        "hooks_url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "issue_comment_url": "generated",
        "issue_events_url": "generated",
        "issues_url": "generated",
        "keys_url": "generated",
        "labels_url": "generated",
        "languages_url": "https:\\/\\/example.com\\/",
        "merges_url": "https:\\/\\/example.com\\/",
        "milestones_url": "generated",
        "name": "generated",
        "node_id": "generated",
        "notifications_url": "generated",
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
            "url": "https:\\/\\/example.com\\/",
            "user_view_type": "generated"
        },
        "private": false,
        "pulls_url": "generated",
        "releases_url": "generated",
        "stargazers_url": "https:\\/\\/example.com\\/",
        "statuses_url": "generated",
        "subscribers_url": "https:\\/\\/example.com\\/",
        "subscription_url": "https:\\/\\/example.com\\/",
        "tags_url": "https:\\/\\/example.com\\/",
        "teams_url": "https:\\/\\/example.com\\/",
        "trees_url": "generated",
        "url": "https:\\/\\/example.com\\/"
    },
    "rerun_url": "https:\\/\\/example.com\\/",
    "run_attempt": 11,
    "run_number": 10,
    "run_started_at": "1970-01-01T00:00:00+00:00",
    "status": "waiting",
    "triggering_actor": {
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
        "url": "https:\\/\\/example.com\\/",
        "user_view_type": "generated"
    },
    "updated_at": "1970-01-01T00:00:00+00:00",
    "url": "https:\\/\\/example.com\\/",
    "workflow_id": 11,
    "workflow_url": "https:\\/\\/example.com\\/",
    "display_title": "Simple Workflow"
}';

    /**
     * displayTitle: The event-specific title associated with the run or the run-name if set, or the value of `run-name` if it is set in the workflow.
     */
    public function __construct(public Schema\WebhookWorkflowRunCompleted\WorkflowRun\Actor|null $actor, #[MapFrom('artifacts_url')]
    public string $artifactsUrl, #[MapFrom('cancel_url')]
    public string $cancelUrl, #[MapFrom('check_suite_id')]
    public int $checkSuiteId, #[MapFrom('check_suite_node_id')]
    public string $checkSuiteNodeId, #[MapFrom('check_suite_url')]
    public string $checkSuiteUrl, public string|null $conclusion, #[MapFrom('created_at')]
    public string $createdAt, public string $event, #[MapFrom('head_branch')]
    public string|null $headBranch, #[MapFrom('head_commit')]
    public Schema\WebhookWorkflowRunCompleted\WorkflowRun\HeadCommit $headCommit, #[MapFrom('head_repository')]
    public Schema\WebhookWorkflowRunCompleted\WorkflowRun\HeadRepository $headRepository, #[MapFrom('head_sha')]
    public string $headSha, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, #[MapFrom('jobs_url')]
    public string $jobsUrl, #[MapFrom('logs_url')]
    public string $logsUrl, public string|null $name, #[MapFrom('node_id')]
    public string $nodeId, public string $path, #[MapFrom('previous_attempt_url')]
    public string|null $previousAttemptUrl, #[MapFrom('pull_requests')]
    public array $pullRequests, #[MapFrom('referenced_workflows')]
    public array|null $referencedWorkflows, public Schema\WebhookWorkflowRunCompleted\WorkflowRun\Repository $repository, #[MapFrom('rerun_url')]
    public string $rerunUrl, #[MapFrom('run_attempt')]
    public int $runAttempt, #[MapFrom('run_number')]
    public int $runNumber, #[MapFrom('run_started_at')]
    public string $runStartedAt, public string $status, #[MapFrom('triggering_actor')]
    public Schema\WebhookWorkflowRunCompleted\WorkflowRun\TriggeringActor|null $triggeringActor, #[MapFrom('updated_at')]
    public string $updatedAt, public string $url, #[MapFrom('workflow_id')]
    public int $workflowId, #[MapFrom('workflow_url')]
    public string $workflowUrl, #[MapFrom('display_title')]
    public string|null $displayTitle,)
    {
    }
}
