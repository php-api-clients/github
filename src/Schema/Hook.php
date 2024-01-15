<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Hook
{
    public const SCHEMA_JSON         = '{
    "title": "Webhook",
    "required": [
        "id",
        "url",
        "type",
        "name",
        "active",
        "events",
        "config",
        "ping_url",
        "created_at",
        "updated_at",
        "last_response",
        "test_url"
    ],
    "type": "object",
    "properties": {
        "type": {
            "type": "string"
        },
        "id": {
            "type": "integer",
            "description": "Unique identifier of the webhook.",
            "examples": [
                42
            ]
        },
        "name": {
            "type": "string",
            "description": "The name of a valid service, use \'web\' for a webhook.",
            "examples": [
                "web"
            ]
        },
        "active": {
            "type": "boolean",
            "description": "Determines whether the hook is actually triggered on pushes.",
            "examples": [
                true
            ]
        },
        "events": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "Determines what events the hook is triggered for. Default: [\'push\'].",
            "examples": [
                "push",
                "pull_request"
            ]
        },
        "config": {
            "title": "Webhook Configuration",
            "type": "object",
            "properties": {
                "url": {
                    "type": "string",
                    "description": "The URL to which the payloads will be delivered.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/example.com\\/webhook"
                    ]
                },
                "content_type": {
                    "type": "string",
                    "description": "The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.",
                    "examples": [
                        "\\"json\\""
                    ]
                },
                "secret": {
                    "type": "string",
                    "description": "If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).",
                    "examples": [
                        "\\"********\\""
                    ]
                },
                "insecure_ssl": {
                    "oneOf": [
                        {
                            "type": "string",
                            "description": "Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**",
                            "examples": [
                                "\\"0\\""
                            ]
                        },
                        {
                            "type": "number"
                        }
                    ]
                }
            },
            "description": "Configuration object of the webhook"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2011-09-06T20:39:23Z"
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2011-09-06T17:26:27Z"
            ]
        },
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1"
            ]
        },
        "test_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/test"
            ]
        },
        "ping_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/pings"
            ]
        },
        "deliveries_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/deliveries"
            ]
        },
        "last_response": {
            "title": "Hook Response",
            "required": [
                "code",
                "status",
                "message"
            ],
            "type": "object",
            "properties": {
                "code": {
                    "type": [
                        "integer",
                        "null"
                    ]
                },
                "status": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "message": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        }
    },
    "description": "Webhooks for repositories."
}';
    public const SCHEMA_TITLE        = 'Webhook';
    public const SCHEMA_DESCRIPTION  = 'Webhooks for repositories.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "generated",
    "id": 42,
    "name": "web",
    "active": true,
    "events": [
        "pull_request",
        "pull_request"
    ],
    "config": {
        "url": "https:\\/\\/example.com\\/webhook",
        "content_type": "\\"json\\"",
        "secret": "\\"********\\"",
        "insecure_ssl": null
    },
    "updated_at": "2011-09-06T20:39:23Z",
    "created_at": "2011-09-06T17:26:27Z",
    "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1",
    "test_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/test",
    "ping_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/pings",
    "deliveries_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks\\/1\\/deliveries",
    "last_response": {
        "code": 4,
        "status": "generated",
        "message": "generated"
    }
}';

    /**
     * id: Unique identifier of the webhook.
     * name: The name of a valid service, use 'web' for a webhook.
     * active: Determines whether the hook is actually triggered on pushes.
     * events: Determines what events the hook is triggered for. Default: ['push'].
     * config: Configuration object of the webhook
     */
    public function __construct(public string $type, public int $id, public string $name, public bool $active, public array $events, public Schema\WebhookConfig $config, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('created_at')]
    public string $createdAt, public string $url, #[MapFrom('test_url')]
    public string $testUrl, #[MapFrom('ping_url')]
    public string $pingUrl, #[MapFrom('deliveries_url')]
    public string|null $deliveriesUrl, #[MapFrom('last_response')]
    public Schema\HookResponse $lastResponse,)
    {
    }
}
