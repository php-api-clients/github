<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet6E163C9A\Tiet9BBD373B\Tiet3BD5D026;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet9A2269AB
{
    public const SCHEMA_JSON         = '{
    "title": "Membership",
    "required": [
        "url",
        "state",
        "role",
        "organization_url",
        "user"
    ],
    "type": "object",
    "properties": {
        "organization_url": {
            "type": "string",
            "format": "uri"
        },
        "role": {
            "type": "string"
        },
        "state": {
            "type": "string"
        },
        "url": {
            "type": "string",
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
    "description": "The membership between the user and the organization. Not present when the action is `member_invited`."
}';
    public const SCHEMA_TITLE        = 'Membership';
    public const SCHEMA_DESCRIPTION  = 'The membership between the user and the organization. Not present when the action is `member_invited`.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "organization_url": "https:\\/\\/example.com\\/",
    "role": "generated",
    "state": "generated",
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

    public function __construct(#[MapFrom('organization_url')]
    public string $organizationUrl, public string $role, public string $state, public string $url, public Schema\WebhookOrganizationDeleted\Membership\User|null $user,)
    {
    }
}
