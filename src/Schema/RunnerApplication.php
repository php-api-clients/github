<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RunnerApplication
{
    public const SCHEMA_JSON         = '{
    "title": "Runner Application",
    "required": [
        "os",
        "architecture",
        "download_url",
        "filename"
    ],
    "type": "object",
    "properties": {
        "os": {
            "type": "string"
        },
        "architecture": {
            "type": "string"
        },
        "download_url": {
            "type": "string"
        },
        "filename": {
            "type": "string"
        },
        "temp_download_token": {
            "type": "string",
            "description": "A short lived bearer token used to download the runner, if needed."
        },
        "sha256_checksum": {
            "type": "string"
        }
    },
    "description": "Runner Application"
}';
    public const SCHEMA_TITLE        = 'Runner Application';
    public const SCHEMA_DESCRIPTION  = 'Runner Application';
    public const SCHEMA_EXAMPLE_DATA = '{
    "os": "generated",
    "architecture": "generated",
    "download_url": "generated",
    "filename": "generated",
    "temp_download_token": "generated",
    "sha256_checksum": "generated"
}';

    /**
     * tempDownloadToken: A short lived bearer token used to download the runner, if needed.
     */
    public function __construct(public string $os, public string $architecture, #[MapFrom('download_url')]
    public string $downloadUrl, public string $filename, #[MapFrom('temp_download_token')]
    public string|null $tempDownloadToken, #[MapFrom('sha256_checksum')]
    public string|null $shaTwoHundredFiftySixChecksum,)
    {
    }
}
