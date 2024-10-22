<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Alert
{
    public const SCHEMA_JSON         = '{
    "required": [
        "number",
        "created_at",
        "url",
        "html_url",
        "state",
        "dismissed_by",
        "dismissed_at",
        "dismissed_reason",
        "rule",
        "tool"
    ],
    "type": "object",
    "properties": {
        "created_at": {
            "type": "string",
            "description": "The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`",
            "format": "date-time"
        },
        "dismissed_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time"
        },
        "dismissed_by": {
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
            "description": "The reason for dismissing or closing the alert."
        },
        "html_url": {
            "type": "string",
            "description": "The GitHub URL of the alert resource.",
            "format": "uri"
        },
        "instances_url": {
            "type": "string",
            "format": "uri"
        },
        "most_recent_instance": {
            "title": "Alert Instance",
            "required": [
                "ref",
                "analysis_key",
                "environment",
                "state"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "analysis_key": {
                    "type": "string",
                    "description": "Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."
                },
                "category": {
                    "type": "string",
                    "description": "Identifies the configuration under which the analysis was executed."
                },
                "classifications": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    }
                },
                "commit_sha": {
                    "type": "string"
                },
                "environment": {
                    "type": "string",
                    "description": "Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."
                },
                "location": {
                    "type": "object",
                    "properties": {
                        "end_column": {
                            "type": "integer"
                        },
                        "end_line": {
                            "type": "integer"
                        },
                        "path": {
                            "type": "string"
                        },
                        "start_column": {
                            "type": "integer"
                        },
                        "start_line": {
                            "type": "integer"
                        }
                    }
                },
                "message": {
                    "type": "object",
                    "properties": {
                        "text": {
                            "type": "string"
                        }
                    }
                },
                "ref": {
                    "type": "string",
                    "description": "The full Git reference, formatted as `refs\\/heads\\/<branch name>`."
                },
                "state": {
                    "enum": [
                        "open",
                        "dismissed",
                        "fixed"
                    ],
                    "type": "string",
                    "description": "State of a code scanning alert."
                }
            }
        },
        "number": {
            "type": "integer",
            "description": "The code scanning alert number."
        },
        "rule": {
            "required": [
                "id",
                "severity",
                "description"
            ],
            "type": "object",
            "properties": {
                "description": {
                    "type": "string",
                    "description": "A short description of the rule used to detect the alert."
                },
                "full_description": {
                    "type": "string"
                },
                "help": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "help_uri": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "A link to the documentation for the rule used to detect the alert."
                },
                "id": {
                    "type": "string",
                    "description": "A unique identifier for the rule used to detect the alert."
                },
                "name": {
                    "type": "string"
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
                "tags": {
                    "type": [
                        "array",
                        "null"
                    ],
                    "items": {
                        "type": "string"
                    }
                }
            }
        },
        "state": {
            "enum": [
                "fixed"
            ],
            "type": "string",
            "description": "State of a code scanning alert."
        },
        "tool": {
            "required": [
                "name",
                "version"
            ],
            "type": "object",
            "properties": {
                "guid": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "name": {
                    "type": "string",
                    "description": "The name of the tool used to generate the code scanning analysis alert."
                },
                "version": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The version of the tool used to detect the alert."
                }
            }
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    },
    "description": "The code scanning alert involved in the event."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The code scanning alert involved in the event.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "created_at": "1970-01-01T00:00:00+00:00",
    "dismissed_at": "1970-01-01T00:00:00+00:00",
    "dismissed_by": {
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
    "dismissed_reason": "used in tests",
    "html_url": "https:\\/\\/example.com\\/",
    "instances_url": "https:\\/\\/example.com\\/",
    "most_recent_instance": {
        "analysis_key": "generated",
        "category": "generated",
        "classifications": [
            "generated",
            "generated"
        ],
        "commit_sha": "generated",
        "environment": "generated",
        "location": {
            "end_column": 10,
            "end_line": 8,
            "path": "generated",
            "start_column": 12,
            "start_line": 10
        },
        "message": {
            "text": "generated"
        },
        "ref": "generated",
        "state": "open"
    },
    "number": 6,
    "rule": {
        "description": "generated",
        "full_description": "generated",
        "help": "generated",
        "help_uri": "generated",
        "id": "generated",
        "name": "generated",
        "severity": "error",
        "tags": null
    },
    "state": "fixed",
    "tool": {
        "guid": "generated",
        "name": "generated",
        "version": "generated"
    },
    "url": "https:\\/\\/example.com\\/"
}';

    /**
     * createdAt: The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`
     * dismissedAt: The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * dismissedReason: The reason for dismissing or closing the alert.
     * htmlUrl: The GitHub URL of the alert resource.
     * number: The code scanning alert number.
     * state: State of a code scanning alert.
     */
    public function __construct(#[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('dismissed_at')]
    public string|null $dismissedAt, #[MapFrom('dismissed_by')]
    public Schema\WebhookCodeScanningAlertFixed\Alert\DismissedBy|null $dismissedBy, #[MapFrom('dismissed_reason')]
    public string|null $dismissedReason, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('instances_url')]
    public string|null $instancesUrl, #[MapFrom('most_recent_instance')]
    public Schema\WebhookCodeScanningAlertFixed\Alert\MostRecentInstance|null $mostRecentInstance, public int $number, public Schema\WebhookCodeScanningAlertFixed\Alert\Rule $rule, public string $state, public Schema\WebhookCodeScanningAlertFixed\Alert\Tool $tool, public string $url,)
    {
    }
}
