<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class PackageFiles
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "content_type": {
            "type": "string"
        },
        "created_at": {
            "type": "string"
        },
        "download_url": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "md5": {
            "type": [
                "string",
                "null"
            ]
        },
        "name": {
            "type": "string"
        },
        "sha1": {
            "type": [
                "string",
                "null"
            ]
        },
        "sha256": {
            "type": "string"
        },
        "size": {
            "type": "integer"
        },
        "state": {
            "type": "string"
        },
        "updated_at": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "content_type": "generated",
    "created_at": "generated",
    "download_url": "generated",
    "id": 2,
    "md5": "generated",
    "name": "generated",
    "sha1": "generated",
    "sha256": "generated",
    "size": 4,
    "state": "generated",
    "updated_at": "generated"
}';

    public function __construct(#[MapFrom('content_type')]
    public string|null $contentType, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('download_url')]
    public string|null $downloadUrl, public int|null $id, #[MapFrom('md5')]
    public string|null $mdFive, public string|null $name, #[MapFrom('sha1')]
    public string|null $shaOne, #[MapFrom('sha256')]
    public string|null $shaTwoHundredFiftySix, public int|null $size, public string|null $state, #[MapFrom('updated_at')]
    public string|null $updatedAt,)
    {
    }
}