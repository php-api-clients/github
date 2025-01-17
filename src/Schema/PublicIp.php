<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class PublicIp
{
    public const SCHEMA_JSON         = '{
    "title": "Public IP for a GitHub-hosted larger runners.",
    "type": "object",
    "properties": {
        "enabled": {
            "type": "boolean",
            "description": "Whether public IP is enabled.",
            "examples": [
                true
            ]
        },
        "prefix": {
            "type": "string",
            "description": "The prefix for the public IP.",
            "examples": [
                "20.80.208.150"
            ]
        },
        "length": {
            "type": "integer",
            "description": "The length of the IP prefix.",
            "examples": [
                28
            ]
        }
    },
    "description": "Provides details of Public IP for a GitHub-hosted larger runners"
}';
    public const SCHEMA_TITLE        = 'Public IP for a GitHub-hosted larger runners.';
    public const SCHEMA_DESCRIPTION  = 'Provides details of Public IP for a GitHub-hosted larger runners';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled": true,
    "prefix": "20.80.208.150",
    "length": 28
}';

    /**
     * enabled: Whether public IP is enabled.
     * prefix: The prefix for the public IP.
     * length: The length of the IP prefix.
     */
    public function __construct(public bool|null $enabled, public string|null $prefix, public int|null $length)
    {
    }
}
