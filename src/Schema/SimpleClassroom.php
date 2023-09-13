<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class SimpleClassroom
{
    public const SCHEMA_JSON         = '{
    "title": "Simple Classroom",
    "required": [
        "id",
        "name",
        "archived",
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
            "description": "Returns whether classroom is archived or not.",
            "examples": [
                false
            ]
        },
        "url": {
            "type": "string",
            "description": "The url of the classroom on GitHub Classroom.",
            "examples": [
                "https:\\/\\/classroom.github.com\\/classrooms\\/1-programming-elixir"
            ]
        }
    },
    "description": "A GitHub Classroom classroom"
}';
    public const SCHEMA_TITLE        = 'Simple Classroom';
    public const SCHEMA_DESCRIPTION  = 'A GitHub Classroom classroom';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 42,
    "name": "Programming Elixir",
    "archived": false,
    "url": "https:\\/\\/classroom.github.com\\/classrooms\\/1-programming-elixir"
}';

    /**
     * id: Unique identifier of the classroom.
     * name: The name of the classroom.
     * archived: Returns whether classroom is archived or not.
     * url: The url of the classroom on GitHub Classroom.
     */
    public function __construct(public int $id, public string $name, public bool $archived, public string $url)
    {
    }
}
