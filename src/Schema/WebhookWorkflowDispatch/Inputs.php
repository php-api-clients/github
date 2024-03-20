<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowDispatch;

final readonly class Inputs
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "additionalProperties": true
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
