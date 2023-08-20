<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class SimpleCommit
{
    public const SCHEMA_JSON         = '{
    "title": "Simple Commit",
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
        "id": {
            "type": "string",
            "description": "SHA for the commit",
            "examples": [
                "7638417db6d59f3c431d3e1f261cc637155684cd"
            ]
        },
        "tree_id": {
            "type": "string",
            "description": "SHA for the commit\'s tree"
        },
        "message": {
            "type": "string",
            "description": "Message describing the purpose of the commit",
            "examples": [
                "Fix #42"
            ]
        },
        "timestamp": {
            "type": "string",
            "description": "Timestamp of the commit",
            "format": "date-time",
            "examples": [
                "2014-08-09T08:02:04+12:00"
            ]
        },
        "author": {
            "required": [
                "name",
                "email"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "name": {
                    "type": "string",
                    "description": "Name of the commit\'s author",
                    "examples": [
                        "Monalisa Octocat"
                    ]
                },
                "email": {
                    "type": "string",
                    "description": "Git email address of the commit\'s author",
                    "format": "email",
                    "examples": [
                        "monalisa.octocat@example.com"
                    ]
                }
            },
            "description": "Information about the Git author"
        },
        "committer": {
            "required": [
                "name",
                "email"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "name": {
                    "type": "string",
                    "description": "Name of the commit\'s committer",
                    "examples": [
                        "Monalisa Octocat"
                    ]
                },
                "email": {
                    "type": "string",
                    "description": "Git email address of the commit\'s committer",
                    "format": "email",
                    "examples": [
                        "monalisa.octocat@example.com"
                    ]
                }
            },
            "description": "Information about the Git committer"
        }
    },
    "description": "A commit."
}';
    public const SCHEMA_TITLE        = 'Simple Commit';
    public const SCHEMA_DESCRIPTION  = 'A commit.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "7638417db6d59f3c431d3e1f261cc637155684cd",
    "tree_id": "generated",
    "message": "Fix #42",
    "timestamp": "2014-08-09T08:02:04+12:00",
    "author": {
        "name": "Monalisa Octocat",
        "email": "monalisa.octocat@example.com"
    },
    "committer": {
        "name": "Monalisa Octocat",
        "email": "monalisa.octocat@example.com"
    }
}';

    /**
     * id: SHA for the commit
     * treeId: SHA for the commit's tree
     * message: Message describing the purpose of the commit
     * timestamp: Timestamp of the commit
     * author: Information about the Git author
     * committer: Information about the Git committer
     */
    public function __construct(public string $id, #[MapFrom('tree_id')]
    public string $treeId, public string $message, public string $timestamp, public Schema\SimpleCommit\Author|null $author, public Schema\SimpleCommit\Committer|null $committer,)
    {
    }
}
