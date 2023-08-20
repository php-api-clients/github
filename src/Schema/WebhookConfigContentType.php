<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class WebhookConfigContentType
{
    public const SCHEMA_JSON         = '{
    "type": "string",
    "description": "The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.",
    "examples": [
        "\\"json\\""
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
