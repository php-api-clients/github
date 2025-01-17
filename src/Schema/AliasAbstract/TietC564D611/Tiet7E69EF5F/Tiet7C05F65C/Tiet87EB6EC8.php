<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietC564D611\Tiet7E69EF5F\Tiet7C05F65C;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet87EB6EC8
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "images"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "images": {
            "type": "array",
            "items": {
                "title": "GitHub-hosted runner image details.",
                "required": [
                    "id",
                    "platform",
                    "size_gb",
                    "display_name",
                    "source"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "string",
                        "description": "The ID of the image. Use this ID for the `image` parameter when creating a new larger runner.",
                        "examples": [
                            "ubuntu-20.04"
                        ]
                    },
                    "platform": {
                        "type": "string",
                        "description": "The operating system of the image.",
                        "examples": [
                            "linux-x64"
                        ]
                    },
                    "size_gb": {
                        "type": "integer",
                        "description": "Image size in GB.",
                        "examples": [
                            86
                        ]
                    },
                    "display_name": {
                        "type": "string",
                        "description": "Display name for this image.",
                        "examples": [
                            20.04
                        ]
                    },
                    "source": {
                        "enum": [
                            "github",
                            "partner",
                            "custom"
                        ],
                        "type": "string",
                        "description": "The image provider."
                    }
                },
                "description": "Provides details of a hosted runner image"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "images": [
        {
            "id": "ubuntu-20.04",
            "platform": "linux-x64",
            "size_gb": 86,
            "display_name": 20.04,
            "source": "custom"
        },
        {
            "id": "ubuntu-20.04",
            "platform": "linux-x64",
            "size_gb": 86,
            "display_name": 20.04,
            "source": "custom"
        }
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, public array $images,)
    {
    }
}
