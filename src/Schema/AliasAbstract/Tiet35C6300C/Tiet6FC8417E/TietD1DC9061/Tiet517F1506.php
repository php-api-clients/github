<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet35C6300C\Tiet6FC8417E\TietD1DC9061;

abstract readonly class Tiet517F1506
{
    public const SCHEMA_JSON         = '{
    "required": [
        "sha",
        "url"
    ],
    "type": "object",
    "properties": {
        "sha": {
            "type": "string"
        },
        "url": {
            "type": "string",
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

    public function __construct(public string $sha, public string $url)
    {
    }
}
