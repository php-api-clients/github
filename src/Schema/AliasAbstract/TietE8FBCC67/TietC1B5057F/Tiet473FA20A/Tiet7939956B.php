<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietE8FBCC67\TietC1B5057F\Tiet473FA20A;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet7939956B
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = 'SimpleCommit';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
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
}';

    /**
     * author: Metaproperties for Git author/committer information.
     * committer: Metaproperties for Git author/committer information.
     */
    public function __construct(public Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author $author, public Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Committer $committer, public string $id, public string $message, public string $timestamp, #[MapFrom('tree_id')]
    public string $treeId,)
    {
    }
}
