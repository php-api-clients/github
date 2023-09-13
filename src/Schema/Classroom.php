<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class Classroom
{
    public const SCHEMA_JSON         = '{
    "title": "Classroom",
    "required": [
        "id",
        "name",
        "archived",
        "organization",
        "url"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "Unique identifier of the classroom.",
            "examples": [
                42
            ]
        },
        "name": {
            "type": "string",
            "description": "The name of the classroom.",
            "examples": [
                "Programming Elixir"
            ]
        },
        "archived": {
            "type": "boolean",
            "description": "Whether classroom is archived.",
            "examples": [
                false
            ]
        },
        "organization": {
            "title": "Organization Simple for Classroom",
            "required": [
                "id",
                "login",
                "node_id",
                "html_url",
                "name",
                "avatar_url"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "examples": [
                        1
                    ]
                },
                "login": {
                    "type": "string",
                    "examples": [
                        "github"
                    ]
                },
                "node_id": {
                    "type": "string",
                    "examples": [
                        "MDEyOk9yZ2FuaXphdGlvbjE="
                    ]
                },
                "html_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/github.com\\/github"
                    ]
                },
                "name": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "examples": [
                        "Github - Code thigns happen here"
                    ]
                },
                "avatar_url": {
                    "type": "string",
                    "examples": [
                        "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
                    ]
                }
            },
            "description": "A GitHub organization."
        },
        "url": {
            "type": "string",
            "description": "The URL of the classroom on GitHub Classroom.",
            "examples": [
                "https:\\/\\/classroom.github.com\\/classrooms\\/1-programming-elixir"
            ]
        }
    },
    "description": "A GitHub Classroom classroom"
}';
    public const SCHEMA_TITLE        = 'Classroom';
    public const SCHEMA_DESCRIPTION  = 'A GitHub Classroom classroom';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 42,
    "name": "Programming Elixir",
    "archived": false,
    "organization": {
        "id": 1,
        "login": "github",
        "node_id": "MDEyOk9yZ2FuaXphdGlvbjE=",
        "html_url": "https:\\/\\/github.com\\/github",
        "name": "Github - Code thigns happen here",
        "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
    },
    "url": "https:\\/\\/classroom.github.com\\/classrooms\\/1-programming-elixir"
}';

    /**
     * id: Unique identifier of the classroom.
     * name: The name of the classroom.
     * archived: Whether classroom is archived.
     * organization: A GitHub organization.
     * url: The URL of the classroom on GitHub Classroom.
     */
    public function __construct(public int $id, public string $name, public bool $archived, public Schema\SimpleClassroomOrganization $organization, public string $url)
    {
    }
}
