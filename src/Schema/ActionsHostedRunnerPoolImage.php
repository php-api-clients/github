<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsHostedRunnerPoolImage
{
    public const SCHEMA_JSON         = '{
    "title": "GitHub-hosted runner image details.",
    "required": [
        "id",
        "size_gb",
        "display_name",
        "source",
        "version"
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
}';
    public const SCHEMA_TITLE        = 'GitHub-hosted runner image details.';
    public const SCHEMA_DESCRIPTION  = 'Provides details of a hosted runner image';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "ubuntu-20.04",
    "size_gb": 86,
    "display_name": 20.04,
    "source": "custom"
}';

    /**
     * id: The ID of the image. Use this ID for the `image` parameter when creating a new larger runner.
     * sizeGb: Image size in GB.
     * displayName: Display name for this image.
     * source: The image provider.
     */
    public function __construct(public string $id, #[MapFrom('size_gb')]
    public int $sizeGb, #[MapFrom('display_name')]
    public string $displayName, public string $source,)
    {
    }
}
