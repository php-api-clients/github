<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class SecretScanningPushProtectionBypassReason
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "false_positive",
        "used_in_tests",
        "will_fix_later"
    ],
    "type": "string",
    "description": "The reason for bypassing push protection."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The reason for bypassing push protection.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
