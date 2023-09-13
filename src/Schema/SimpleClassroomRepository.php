<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SimpleClassroomRepository
{
    public const SCHEMA_JSON         = '{
    "title": "Simple Classroom Repository",
    "required": [
        "id",
        "full_name",
        "html_url",
        "node_id",
        "private",
        "default_branch"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "A unique identifier of the repository.",
            "examples": [
                1296269
            ]
        },
        "full_name": {
            "type": "string",
            "description": "The full, globally unique name of the repository.",
            "examples": [
                "octocat\\/Hello-World"
            ]
        },
        "html_url": {
            "type": "string",
            "description": "The URL to view the repository on GitHub.com.",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/octocat\\/Hello-World"
            ]
        },
        "node_id": {
            "type": "string",
            "description": "The GraphQL identifier of the repository.",
            "examples": [
                "MDEwOlJlcG9zaXRvcnkxMjk2MjY5"
            ]
        },
        "private": {
            "type": "boolean",
            "description": "Whether the repository is private."
        },
        "default_branch": {
            "type": "string",
            "description": "The default branch for the repository.",
            "examples": [
                "main"
            ]
        }
    },
    "description": "A GitHub repository view for Classroom"
}';
    public const SCHEMA_TITLE        = 'Simple Classroom Repository';
    public const SCHEMA_DESCRIPTION  = 'A GitHub repository view for Classroom';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 1296269,
    "full_name": "octocat\\/Hello-World",
    "html_url": "https:\\/\\/github.com\\/octocat\\/Hello-World",
    "node_id": "MDEwOlJlcG9zaXRvcnkxMjk2MjY5",
    "private": false,
    "default_branch": "main"
}';

    /**
     * id: A unique identifier of the repository.
     * fullName: The full, globally unique name of the repository.
     * htmlUrl: The URL to view the repository on GitHub.com.
     * nodeId: The GraphQL identifier of the repository.
     * private: Whether the repository is private.
     * defaultBranch: The default branch for the repository.
     */
    public function __construct(public int $id, #[MapFrom('full_name')]
    public string $fullName, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('node_id')]
    public string $nodeId, public bool $private, #[MapFrom('default_branch')]
    public string $defaultBranch,)
    {
    }
}
