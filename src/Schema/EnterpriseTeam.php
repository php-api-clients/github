<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class EnterpriseTeam
{
    public const SCHEMA_JSON         = '{
    "title": "Enterprise Team",
    "required": [
        "id",
        "url",
        "members_url",
        "sync_to_organizations",
        "name",
        "html_url",
        "slug",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "format": "int64"
        },
        "name": {
            "type": "string"
        },
        "slug": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "sync_to_organizations": {
            "type": "string",
            "examples": [
                "disabled | all"
            ]
        },
        "group_id": {
            "type": [
                "integer",
                "null"
            ],
            "examples": [
                1
            ]
        },
        "html_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/enterprises\\/dc\\/teams\\/justice-league"
            ]
        },
        "members_url": {
            "type": "string"
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        }
    },
    "description": "Group of enterprise owners and\\/or members"
}';
    public const SCHEMA_TITLE        = 'Enterprise Team';
    public const SCHEMA_DESCRIPTION  = 'Group of enterprise owners and/or members';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "name": "generated",
    "slug": "generated",
    "url": "https:\\/\\/example.com\\/",
    "sync_to_organizations": "disabled | all",
    "group_id": 1,
    "html_url": "https:\\/\\/github.com\\/enterprises\\/dc\\/teams\\/justice-league",
    "members_url": "generated",
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00"
}';

    public function __construct(public int $id, public string $name, public string $slug, public string $url, #[MapFrom('sync_to_organizations')]
    public string $syncToOrganizations, #[MapFrom('group_id')]
    public int|null $groupId, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('members_url')]
    public string $membersUrl, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt,)
    {
    }
}
