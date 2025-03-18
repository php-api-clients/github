<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class OrganizationCreateIssueType
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name",
        "is_enabled"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "Name of the issue type."
        },
        "is_enabled": {
            "type": "boolean",
            "description": "Whether or not the issue type is enabled at the organization level."
        },
        "is_private": {
            "type": "boolean",
            "description": "Whether or not the issue type is restricted to issues in private repositories."
        },
        "description": {
            "type": [
                "string",
                "null"
            ],
            "description": "Description of the issue type."
        },
        "color": {
            "enum": [
                "gray",
                "blue",
                "green",
                "yellow",
                "orange",
                "red",
                "pink",
                "purple",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "Color for the issue type."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "is_enabled": false,
    "is_private": false,
    "description": "generated",
    "color": "gray"
}';

    /**
     * name: Name of the issue type.
     * isEnabled: Whether or not the issue type is enabled at the organization level.
     * isPrivate: Whether or not the issue type is restricted to issues in private repositories.
     * description: Description of the issue type.
     * color: Color for the issue type.
     */
    public function __construct(public string $name, #[MapFrom('is_enabled')]
    public bool $isEnabled, #[MapFrom('is_private')]
    public bool|null $isPrivate, public string|null $description, public string|null $color,)
    {
    }
}
