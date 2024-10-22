<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookPageBuild;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Build
{
    public const SCHEMA_JSON         = '{
    "required": [
        "url",
        "status",
        "error",
        "pusher",
        "commit",
        "duration",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "commit": {
            "type": [
                "string",
                "null"
            ]
        },
        "created_at": {
            "type": "string"
        },
        "duration": {
            "type": "integer"
        },
        "error": {
            "required": [
                "message"
            ],
            "type": "object",
            "properties": {
                "message": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        },
        "pusher": {
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
        "status": {
            "type": "string"
        },
        "updated_at": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    },
    "description": "The [List GitHub Pages builds](https:\\/\\/docs.github.com\\/rest\\/pages\\/pages#list-github-pages-builds) itself."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The [List GitHub Pages builds](https://docs.github.com/rest/pages/pages#list-github-pages-builds) itself.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "commit": "generated",
    "created_at": "generated",
    "duration": 8,
    "error": {
        "message": "generated"
    },
    "pusher": {
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
    "status": "generated",
    "updated_at": "generated",
    "url": "https:\\/\\/example.com\\/"
}';

    public function __construct(public string|null $commit, #[MapFrom('created_at')]
    public string $createdAt, public int $duration, public Schema\WebhookPageBuild\Build\Error $error, public Schema\WebhookPageBuild\Build\Pusher|null $pusher, public string $status, #[MapFrom('updated_at')]
    public string $updatedAt, public string $url,)
    {
    }
}
