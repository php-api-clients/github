<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Meta\GetAllVersions\Response\ApplicationJson;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "type": "string",
    "format": "date",
    "examples": [
        "2021-01-01"
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
