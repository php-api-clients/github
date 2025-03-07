<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningAlertCreateRequest
{
    public const SCHEMA_JSON         = '{
    "type": "boolean",
    "description": "If `true`, attempt to create an alert dismissal request."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'If `true`, attempt to create an alert dismissal request.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
