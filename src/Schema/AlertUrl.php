<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class AlertUrl
{
    public const SCHEMA_JSON         = '{
    "type": "string",
    "description": "The REST API URL of the alert resource.",
    "format": "uri",
    "readOnly": true
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The REST API URL of the alert resource.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
