<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class WebhooksRepositorySelection
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "all",
        "selected"
    ],
    "type": "string",
    "description": "Describe whether all repositories have been selected or there\'s a selection involved"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Describe whether all repositories have been selected or there\'s a selection involved';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
