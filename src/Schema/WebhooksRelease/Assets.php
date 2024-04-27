<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhooksRelease;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Assets
{
    public const SCHEMA_JSON         = '{
    "title": "Release Asset",
    "required": [
        "url",
        "browser_download_url",
        "id",
        "node_id",
        "name",
        "label",
        "state",
        "content_type",
        "size",
        "download_count",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "browser_download_url": {
            "type": "string",
            "format": "uri"
        },
        "content_type": {
            "type": "string"
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "download_count": {
            "type": "integer"
        },
        "id": {
            "type": "integer"
        },
        "label": {
            "type": [
                "string",
                "null"
            ]
        },
        "name": {
            "type": "string",
            "description": "The file name of the asset."
        },
        "node_id": {
            "type": "string"
        },
        "size": {
            "type": "integer"
        },
        "state": {
            "enum": [
                "uploaded"
            ],
            "type": "string",
            "description": "State of the release asset."
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        },
        "uploader": {
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
        "url": {
            "type": "string",
            "format": "uri"
        }
    },
    "description": "Data related to a release."
}';
    public const SCHEMA_TITLE        = 'Release Asset';
    public const SCHEMA_DESCRIPTION  = 'Data related to a release.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "browser_download_url": "https:\\/\\/example.com\\/",
    "content_type": "generated",
    "created_at": "1970-01-01T00:00:00+00:00",
    "download_count": 14,
    "id": 2,
    "label": "generated",
    "name": "generated",
    "node_id": "generated",
    "size": 4,
    "state": "uploaded",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "uploader": {
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
    "url": "https:\\/\\/example.com\\/"
}';

    /**
     * name: The file name of the asset.
     * state: State of the release asset.
     */
    public function __construct(#[MapFrom('browser_download_url')]
    public string $browserDownloadUrl, #[MapFrom('content_type')]
    public string $contentType, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('download_count')]
    public int $downloadCount, public int $id, public string|null $label, public string $name, #[MapFrom('node_id')]
    public string $nodeId, public int $size, public string $state, #[MapFrom('updated_at')]
    public string $updatedAt, public Schema\WebhooksRelease\Assets\Uploader|null $uploader, public string $url,)
    {
    }
}
