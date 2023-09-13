<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SimpleClassroomUser
{
    public const SCHEMA_JSON         = '{
    "title": "Simple Classroom User",
    "required": [
        "id",
        "login",
        "avatar_url",
        "html_url"
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
                "octocat"
            ]
        },
        "avatar_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
            ]
        },
        "html_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/octocat"
            ]
        }
    },
    "description": "A GitHub user simplified for Classroom."
}';
    public const SCHEMA_TITLE        = 'Simple Classroom User';
    public const SCHEMA_DESCRIPTION  = 'A GitHub user simplified for Classroom.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 1,
    "login": "octocat",
    "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
    "html_url": "https:\\/\\/github.com\\/octocat"
}';

    public function __construct(public int $id, public string $login, #[MapFrom('avatar_url')]
    public string $avatarUrl, #[MapFrom('html_url')]
    public string $htmlUrl,)
    {
    }
}
