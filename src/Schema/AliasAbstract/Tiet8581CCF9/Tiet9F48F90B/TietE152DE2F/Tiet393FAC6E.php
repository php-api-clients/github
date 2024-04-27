<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet8581CCF9\Tiet9F48F90B\TietE152DE2F;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet393FAC6E
{
    public const SCHEMA_JSON         = '{
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
                        "Organization",
                        "Mannequin"
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
}';
    public const SCHEMA_TITLE        = 'Milestone';
    public const SCHEMA_DESCRIPTION  = 'A collection of related issues and pull requests.';
    public const SCHEMA_EXAMPLE_DATA = '{
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
        "type": "Mannequin",
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
}';

    /**
     * number: The number of the milestone.
     * state: The state of the milestone.
     * title: The title of the milestone.
     */
    public function __construct(#[MapFrom('closed_at')]
    public string|null $closedAt, #[MapFrom('closed_issues')]
    public int $closedIssues, #[MapFrom('created_at')]
    public string $createdAt, public Schema\WebhooksIssue\Milestone\Creator|null $creator, public string|null $description, #[MapFrom('due_on')]
    public string|null $dueOn, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, #[MapFrom('labels_url')]
    public string $labelsUrl, #[MapFrom('node_id')]
    public string $nodeId, public int $number, #[MapFrom('open_issues')]
    public int $openIssues, public string $state, public string $title, #[MapFrom('updated_at')]
    public string $updatedAt, public string $url,)
    {
    }
}
