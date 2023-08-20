<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookStatus\Branches;

final readonly class Commit
{
    public const SCHEMA_JSON         = '{
    "required": [
        "sha",
        "url"
    ],
    "type": "object",
    "properties": {
        "sha": {
            "type": [
                "string",
                "null"
            ]
        },
        "url": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "sha": "generated",
    "url": "https:\\/\\/example.com\\/"
}';

    public function __construct(public string|null $sha, public string|null $url)
    {
    }
}
