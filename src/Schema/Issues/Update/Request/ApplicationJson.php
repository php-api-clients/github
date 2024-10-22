<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Issues\Update\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "title": {
            "type": [
                "null",
                "string",
                "integer"
            ],
            "oneOf": [
                {
                    "type": "string"
                },
                {
                    "type": "integer"
                }
            ],
            "description": "The title of the issue."
        },
        "body": {
            "type": [
                "string",
                "null"
            ],
            "description": "The contents of the issue."
        },
        "assignee": {
            "type": [
                "string",
                "null"
            ],
            "description": "Username to assign to this issue. **This field is closing down.**"
        },
        "state": {
            "enum": [
                "open",
                "closed"
            ],
            "type": "string",
            "description": "The open or closed state of the issue."
        },
        "state_reason": {
            "enum": [
                "completed",
                "not_planned",
                "reopened",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The reason for the state change. Ignored unless `state` is changed.",
            "examples": [
                "not_planned"
            ]
        },
        "milestone": {
            "type": [
                "null",
                "string",
                "integer"
            ],
            "oneOf": [
                {
                    "type": "string"
                },
                {
                    "type": "integer",
                    "description": "The `number` of the milestone to associate this issue with or use `null` to remove the current milestone. Only users with push access can set the milestone for issues. Without push access to the repository, milestone changes are silently dropped."
                }
            ]
        },
        "labels": {
            "type": "array",
            "items": {
                "oneOf": [
                    {
                        "type": "string"
                    },
                    {
                        "type": "object",
                        "properties": {
                            "id": {
                                "type": "integer"
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
                                "type": [
                                    "string",
                                    "null"
                                ]
                            }
                        }
                    }
                ]
            },
            "description": "Labels to associate with this issue. Pass one or more labels to _replace_ the set of labels on this issue. Send an empty array (`[]`) to clear all labels from the issue. Only users with push access can set labels for issues. Without push access to the repository, label changes are silently dropped."
        },
        "assignees": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "Usernames to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this issue. Send an empty array (`[]`) to clear all assignees from the issue. Only users with push access can set assignees for new issues. Without push access to the repository, assignee changes are silently dropped."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "title": null,
    "body": "generated",
    "assignee": "generated",
    "state": "open",
    "state_reason": "not_planned",
    "milestone": null,
    "labels": [
        null,
        null
    ],
    "assignees": [
        "generated",
        "generated"
    ]
}';

    /**
     * title: The title of the issue.
     * body: The contents of the issue.
     * assignee: Username to assign to this issue. **This field is closing down.**
     * state: The open or closed state of the issue.
     * stateReason: The reason for the state change. Ignored unless `state` is changed.
     * labels: Labels to associate with this issue. Pass one or more labels to _replace_ the set of labels on this issue. Send an empty array (`[]`) to clear all labels from the issue. Only users with push access can set labels for issues. Without push access to the repository, label changes are silently dropped.
     * assignees: Usernames to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this issue. Send an empty array (`[]`) to clear all assignees from the issue. Only users with push access can set assignees for new issues. Without push access to the repository, assignee changes are silently dropped.
     */
    public function __construct(public string|int|null $title, public string|null $body, public string|null $assignee, public string|null $state, #[MapFrom('state_reason')]
    public string|null $stateReason, public string|int|null $milestone, public array|null $labels, public array|null $assignees,)
    {
    }
}
