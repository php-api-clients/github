<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SimpleClassroomOrganization
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = 'Organization Simple for Classroom';
    public const SCHEMA_DESCRIPTION  = 'A GitHub organization.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 1,
    "login": "github",
    "node_id": "MDEyOk9yZ2FuaXphdGlvbjE=",
    "html_url": "https:\\/\\/github.com\\/github",
    "name": "Github - Code thigns happen here",
    "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
}';

    public function __construct(public int $id, public string $login, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('html_url')]
    public string $htmlUrl, public string|null $name, #[MapFrom('avatar_url')]
    public string $avatarUrl,)
    {
    }
}
