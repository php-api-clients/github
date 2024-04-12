<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookIssuesUnlocked;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Issue
{
    public const SCHEMA_JSON         = '{
    "title": "Issue",
    "required": [
        "active_lock_reason",
        "assignees",
        "author_association",
        "body",
        "closed_at",
        "comments",
        "comments_url",
        "created_at",
        "events_url",
        "html_url",
        "id",
        "labels_url",
        "locked",
        "milestone",
        "node_id",
        "number",
        "reactions",
        "repository_url",
        "title",
        "updated_at",
        "url",
        "user"
    ],
    "type": "object",
    "properties": {
        "active_lock_reason": {
            "enum": [
                "resolved",
                "off-topic",
                "too heated",
                "spam",
                null
            ],
            "type": [
                "string",
                "null"
            ]
        },
        "assignee": {
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
        "assignees": {
            "type": "array",
            "items": {
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
            }
        },
        "author_association": {
            "title": "AuthorAssociation",
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
            "description": "How the author is associated with the repository."
        },
        "body": {
            "type": [
                "string",
                "null"
            ],
            "description": "Contents of the issue"
        },
        "closed_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time"
        },
        "comments": {
            "type": "integer"
        },
        "comments_url": {
            "type": "string",
            "format": "uri"
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "draft": {
            "type": "boolean"
        },
        "events_url": {
            "type": "string",
            "format": "uri"
        },
        "html_url": {
            "type": "string",
            "format": "uri"
        },
        "id": {
            "type": "integer",
            "format": "int64"
        },
        "labels": {
            "type": "array",
            "items": {
                "title": "Label",
                "required": [
                    "id",
                    "node_id",
                    "url",
                    "name",
                    "color",
                    "default",
                    "description"
                ],
                "type": [
                    "object",
                    "null"
                ],
                "properties": {
                    "color": {
                        "type": "string",
                        "description": "6-character hex code, without the leading #, identifying the color"
                    },
                    "default": {
                        "type": "boolean"
                    },
                    "description": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "id": {
                        "type": "integer"
                    },
                    "name": {
                        "type": "string",
                        "description": "The name of the label."
                    },
                    "node_id": {
                        "type": "string"
                    },
                    "url": {
                        "type": "string",
                        "description": "URL for the label",
                        "format": "uri"
                    }
                }
            }
        },
        "labels_url": {
            "type": "string",
            "format": "uri-template"
        },
        "locked": {
            "enum": [
                false
            ],
            "type": "boolean"
        },
        "milestone": {
            "title": "Milestone",
            "required": [
                "url",
                "html_url",
                "labels_url",
                "id",
                "node_id",
                "number",
                "title",
                "description",
                "creator",
                "open_issues",
                "closed_issues",
                "state",
                "created_at",
                "updated_at",
                "due_on",
                "closed_at"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "closed_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time"
                },
                "closed_issues": {
                    "type": "integer"
                },
                "created_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "creator": {
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
                "description": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "due_on": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": "integer"
                },
                "labels_url": {
                    "type": "string",
                    "format": "uri"
                },
                "node_id": {
                    "type": "string"
                },
                "number": {
                    "type": "integer",
                    "description": "The number of the milestone."
                },
                "open_issues": {
                    "type": "integer"
                },
                "state": {
                    "enum": [
                        "open",
                        "closed"
                    ],
                    "type": "string",
                    "description": "The state of the milestone."
                },
                "title": {
                    "type": "string",
                    "description": "The title of the milestone."
                },
                "updated_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            },
            "description": "A collection of related issues and pull requests."
        },
        "node_id": {
            "type": "string"
        },
        "number": {
            "type": "integer"
        },
        "performed_via_github_app": {
            "title": "App",
            "required": [
                "id",
                "node_id",
                "owner",
                "name",
                "description",
                "external_url",
                "html_url",
                "created_at",
                "updated_at"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "created_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time"
                },
                "description": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "events": {
                    "type": "array",
                    "items": {
                        "enum": [
                            "branch_protection_rule",
                            "check_run",
                            "check_suite",
                            "code_scanning_alert",
                            "commit_comment",
                            "content_reference",
                            "create",
                            "delete",
                            "deployment",
                            "deployment_review",
                            "deployment_status",
                            "deploy_key",
                            "discussion",
                            "discussion_comment",
                            "fork",
                            "gollum",
                            "issues",
                            "issue_comment",
                            "label",
                            "member",
                            "membership",
                            "milestone",
                            "organization",
                            "org_block",
                            "page_build",
                            "project",
                            "project_card",
                            "project_column",
                            "public",
                            "pull_request",
                            "pull_request_review",
                            "pull_request_review_comment",
                            "push",
                            "registry_package",
                            "release",
                            "repository",
                            "repository_dispatch",
                            "secret_scanning_alert",
                            "star",
                            "status",
                            "team",
                            "team_add",
                            "watch",
                            "workflow_dispatch",
                            "workflow_run"
                        ],
                        "type": "string"
                    },
                    "description": "The list of events for the GitHub app"
                },
                "external_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": [
                        "integer",
                        "null"
                    ],
                    "description": "Unique identifier of the GitHub app"
                },
                "name": {
                    "type": "string",
                    "description": "The name of the GitHub app"
                },
                "node_id": {
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
                    "type": "object",
                    "properties": {
                        "actions": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "administration": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "checks": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "content_references": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "contents": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "deployments": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "discussions": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "emails": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "environments": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "issues": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "keys": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "members": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "metadata": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "organization_administration": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "organization_hooks": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "organization_packages": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "organization_plan": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "organization_projects": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "organization_secrets": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "organization_self_hosted_runners": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "organization_user_blocking": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "packages": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "pages": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "pull_requests": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "repository_hooks": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "repository_projects": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "secret_scanning_alerts": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "secrets": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "security_events": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "security_scanning_alert": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "single_file": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "statuses": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "team_discussions": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "vulnerability_alerts": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        },
                        "workflows": {
                            "enum": [
                                "read",
                                "write"
                            ],
                            "type": "string"
                        }
                    },
                    "description": "The set of permissions for the GitHub app"
                },
                "slug": {
                    "type": "string",
                    "description": "The slug name of the GitHub app"
                },
                "updated_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time"
                }
            },
            "description": "GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."
        },
        "pull_request": {
            "type": "object",
            "properties": {
                "diff_url": {
                    "type": "string",
                    "format": "uri"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "merged_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time"
                },
                "patch_url": {
                    "type": "string",
                    "format": "uri"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        },
        "reactions": {
            "title": "Reactions",
            "required": [
                "url",
                "total_count",
                "+1",
                "-1",
                "laugh",
                "confused",
                "heart",
                "hooray",
                "eyes",
                "rocket"
            ],
            "type": "object",
            "properties": {
                "+1": {
                    "type": "integer"
                },
                "-1": {
                    "type": "integer"
                },
                "confused": {
                    "type": "integer"
                },
                "eyes": {
                    "type": "integer"
                },
                "heart": {
                    "type": "integer"
                },
                "hooray": {
                    "type": "integer"
                },
                "laugh": {
                    "type": "integer"
                },
                "rocket": {
                    "type": "integer"
                },
                "total_count": {
                    "type": "integer"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        },
        "repository_url": {
            "type": "string",
            "format": "uri"
        },
        "state": {
            "enum": [
                "open",
                "closed"
            ],
            "type": "string",
            "description": "State of the issue; either \'open\' or \'closed\'"
        },
        "state_reason": {
            "type": [
                "string",
                "null"
            ]
        },
        "timeline_url": {
            "type": "string",
            "format": "uri"
        },
        "title": {
            "type": "string",
            "description": "Title of the issue"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        },
        "url": {
            "type": "string",
            "description": "URL for the issue",
            "format": "uri"
        },
        "user": {
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
        }
    },
    "description": "The [issue](https:\\/\\/docs.github.com\\/rest\\/issues\\/issues#get-an-issue) itself."
}';
    public const SCHEMA_TITLE        = 'Issue';
    public const SCHEMA_DESCRIPTION  = 'The [issue](https://docs.github.com/rest/issues/issues#get-an-issue) itself.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "active_lock_reason": "spam",
    "assignee": {
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
    "assignees": [
        {
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
        {
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
        }
    ],
    "author_association": "OWNER",
    "body": "generated",
    "closed_at": "1970-01-01T00:00:00+00:00",
    "comments": 8,
    "comments_url": "https:\\/\\/example.com\\/",
    "created_at": "1970-01-01T00:00:00+00:00",
    "draft": false,
    "events_url": "https:\\/\\/example.com\\/",
    "html_url": "https:\\/\\/example.com\\/",
    "id": 2,
    "labels": [
        {
            "color": "generated",
            "default": false,
            "description": "generated",
            "id": 2,
            "name": "generated",
            "node_id": "generated",
            "url": "https:\\/\\/example.com\\/"
        },
        {
            "color": "generated",
            "default": false,
            "description": "generated",
            "id": 2,
            "name": "generated",
            "node_id": "generated",
            "url": "https:\\/\\/example.com\\/"
        }
    ],
    "labels_url": "generated",
    "locked": false,
    "milestone": {
        "closed_at": "1970-01-01T00:00:00+00:00",
        "closed_issues": 13,
        "created_at": "1970-01-01T00:00:00+00:00",
        "creator": {
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
        "description": "generated",
        "due_on": "1970-01-01T00:00:00+00:00",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "labels_url": "https:\\/\\/example.com\\/",
        "node_id": "generated",
        "number": 6,
        "open_issues": 11,
        "state": "open",
        "title": "generated",
        "updated_at": "1970-01-01T00:00:00+00:00",
        "url": "https:\\/\\/example.com\\/"
    },
    "node_id": "generated",
    "number": 6,
    "performed_via_github_app": {
        "created_at": "1970-01-01T00:00:00+00:00",
        "description": "generated",
        "events": [
            "generated",
            "generated"
        ],
        "external_url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "name": "generated",
        "node_id": "generated",
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
            "actions": "read",
            "administration": "write",
            "checks": "write",
            "content_references": "write",
            "contents": "write",
            "deployments": "read",
            "discussions": "read",
            "emails": "write",
            "environments": "write",
            "issues": "write",
            "keys": "write",
            "members": "read",
            "metadata": "write",
            "organization_administration": "read",
            "organization_hooks": "write",
            "organization_packages": "read",
            "organization_plan": "read",
            "organization_projects": "read",
            "organization_secrets": "write",
            "organization_self_hosted_runners": "write",
            "organization_user_blocking": "write",
            "packages": "write",
            "pages": "read",
            "pull_requests": "read",
            "repository_hooks": "write",
            "repository_projects": "read",
            "secret_scanning_alerts": "write",
            "secrets": "read",
            "security_events": "read",
            "security_scanning_alert": "read",
            "single_file": "read",
            "statuses": "write",
            "team_discussions": "write",
            "vulnerability_alerts": "write",
            "workflows": "read"
        },
        "slug": "generated",
        "updated_at": "1970-01-01T00:00:00+00:00"
    },
    "pull_request": {
        "diff_url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "merged_at": "1970-01-01T00:00:00+00:00",
        "patch_url": "https:\\/\\/example.com\\/",
        "url": "https:\\/\\/example.com\\/"
    },
    "reactions": {
        "+1": 11,
        "-1": 10,
        "confused": 8,
        "eyes": 4,
        "heart": 5,
        "hooray": 6,
        "laugh": 5,
        "rocket": 6,
        "total_count": 11,
        "url": "https:\\/\\/example.com\\/"
    },
    "repository_url": "https:\\/\\/example.com\\/",
    "state": "open",
    "state_reason": "generated",
    "timeline_url": "https:\\/\\/example.com\\/",
    "title": "generated",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "url": "https:\\/\\/example.com\\/",
    "user": {
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
    }
}';

    /**
     * authorAssociation: How the author is associated with the repository.
     * body: Contents of the issue
     * milestone: A collection of related issues and pull requests.
     * performedViaGithubApp: GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * state: State of the issue; either 'open' or 'closed'
     * title: Title of the issue
     * url: URL for the issue
     */
    public function __construct(#[MapFrom('active_lock_reason')]
    public string|null $activeLockReason, public Schema\WebhookIssuesUnlocked\Issue\Assignee|null $assignee, public array $assignees, #[MapFrom('author_association')]
    public string $authorAssociation, public string|null $body, #[MapFrom('closed_at')]
    public string|null $closedAt, public int $comments, #[MapFrom('comments_url')]
    public string $commentsUrl, #[MapFrom('created_at')]
    public string $createdAt, public bool|null $draft, #[MapFrom('events_url')]
    public string $eventsUrl, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, public array|null $labels, #[MapFrom('labels_url')]
    public string $labelsUrl, public bool $locked, public Schema\WebhookIssuesUnlocked\Issue\Milestone|null $milestone, #[MapFrom('node_id')]
    public string $nodeId, public int $number, #[MapFrom('performed_via_github_app')]
    public Schema\WebhookIssuesUnlocked\Issue\PerformedViaGithubApp|null $performedViaGithubApp, #[MapFrom('pull_request')]
    public Schema\WebhookIssuesUnlocked\Issue\PullRequest|null $pullRequest, public Schema\WebhookIssuesUnlocked\Issue\Reactions $reactions, #[MapFrom('repository_url')]
    public string $repositoryUrl, public string|null $state, #[MapFrom('state_reason')]
    public string|null $stateReason, #[MapFrom('timeline_url')]
    public string|null $timelineUrl, public string $title, #[MapFrom('updated_at')]
    public string $updatedAt, public string $url, public Schema\WebhookIssuesUnlocked\Issue\User|null $user,)
    {
    }
}
