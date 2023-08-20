<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Artifact
{
    public const SCHEMA_JSON         = '{
    "title": "Artifact",
    "required": [
        "id",
        "node_id",
        "name",
        "size_in_bytes",
        "url",
        "archive_download_url",
        "expired",
        "created_at",
        "expires_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "examples": [
                5
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDEwOkNoZWNrU3VpdGU1"
            ]
        },
        "name": {
            "type": "string",
            "description": "The name of the artifact.",
            "examples": [
                "AdventureWorks.Framework"
            ]
        },
        "size_in_bytes": {
            "type": "integer",
            "description": "The size in bytes of the artifact.",
            "examples": [
                12345
            ]
        },
        "url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5"
            ]
        },
        "archive_download_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5\\/zip"
            ]
        },
        "expired": {
            "type": "boolean",
            "description": "Whether or not the artifact has expired."
        },
        "created_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time"
        },
        "expires_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time"
        },
        "updated_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time"
        },
        "workflow_run": {
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "id": {
                    "type": "integer",
                    "examples": [
                        10
                    ]
                },
                "repository_id": {
                    "type": "integer",
                    "examples": [
                        42
                    ]
                },
                "head_repository_id": {
                    "type": "integer",
                    "examples": [
                        42
                    ]
                },
                "head_branch": {
                    "type": "string",
                    "examples": [
                        "main"
                    ]
                },
                "head_sha": {
                    "type": "string",
                    "examples": [
                        "009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"
                    ]
                }
            }
        }
    },
    "description": "An artifact"
}';
    public const SCHEMA_TITLE        = 'Artifact';
    public const SCHEMA_DESCRIPTION  = 'An artifact';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 5,
    "node_id": "MDEwOkNoZWNrU3VpdGU1",
    "name": "AdventureWorks.Framework",
    "size_in_bytes": 12345,
    "url": "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5",
    "archive_download_url": "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5\\/zip",
    "expired": false,
    "created_at": "1970-01-01T00:00:00+00:00",
    "expires_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "workflow_run": {
        "id": 10,
        "repository_id": 42,
        "head_repository_id": 42,
        "head_branch": "main",
        "head_sha": "009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"
    }
}';

    /**
     * name: The name of the artifact.
     * sizeInBytes: The size in bytes of the artifact.
     * expired: Whether or not the artifact has expired.
     */
    public function __construct(public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $name, #[MapFrom('size_in_bytes')]
    public int $sizeInBytes, public string $url, #[MapFrom('archive_download_url')]
    public string $archiveDownloadUrl, public bool $expired, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('expires_at')]
    public string|null $expiresAt, #[MapFrom('updated_at')]
    public string|null $updatedAt, #[MapFrom('workflow_run')]
    public Schema\Artifact\WorkflowRun|null $workflowRun,)
    {
    }
}
